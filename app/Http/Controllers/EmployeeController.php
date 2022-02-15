<?php
namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Skill;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
	public function add() {

		$skills = \App\Models\Skill::get();
		return view('skills.add', compact('skills'));
	}

	public function store() {
		$validatedData = request()->validate([
        'name' => 'required|max:255',
        'address' => 'required',
    ]);

		$employee = new Employee;
		$employee->employee_name = request()->name;
        $employee->address = request()->address;
        $employee->save();
        $employee->skills()->attach(request()->skill);
        return redirect()->to("skills-list");
	}

	public function list() {

		$employees = \App\Models\Employee::with('skills')->get();
		return view('skills.list', compact('employees'));
	}

	public function edit($id) {

		$employee_skill=[];

        $skills = \App\Models\Skill::get();
		$employee = \App\Models\Employee::find($id);
		foreach($employee->skills as $skill)
		{
			array_push($employee_skill, $skill->id);

		}
		//return $employee_skill;
		return view('skills.add', compact('skills','employee','employee_skill'));
	}

	public function update($id) {
		$employee = \App\Models\Employee::find($id); 

       $employee->employee_name = request()->employee_name;

       $employee->address = request()->address;

       $employee->update();

       $employee->skills()->sync(request()->skill);

       return redirect()->to("skills-list");
	}
 

 }