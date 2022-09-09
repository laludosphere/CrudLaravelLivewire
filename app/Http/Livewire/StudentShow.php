<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Student;
use Livewire\Component;

class StudentShow extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $email, $course, $student_id, $mobile;
    public $search = '';

    protected function rules()
    {
        return [
            'name' => 'required|string|min:6',
            'email' => ['required', 'email'],
            'course' => 'required|string',
            'mobile' => 'required|string|min:10'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveStudent()
    {
        $validatedData = $this->validate();

        Student::create($validatedData);
        session()->flash('message', 'Student Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function showStudent(int $student_id)
    {
        $student = Student::find($student_id);
        if ($student) {
            $this->student_id = $student->id;
            $this->name = $student->name;
            $this->email = $student->email;
            $this->mobile = $student->mobile;
            $this->course = $student->course;
        } else {
            return redirect()->to('/students');
        }
    }

    public function editStudent(int $student_id)
    {
        $student = Student::find($student_id);
        if ($student) {

            $this->student_id = $student->id;
            $this->name = $student->name;
            $this->email = $student->email;
            $this->mobile = $student->email;
            $this->course = $student->course;
        } else {
            return redirect()->to('/students');
        }
    }

    public function updateStudent()
    {
        $validatedData = $this->validate();

        Student::where('id', $this->student_id)->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'],
            'course' => $validatedData['course']
        ]);
        session()->flash('message', 'Student Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteStudent(int $student_id)
    {
        $this->student_id = $student_id;
    }

    public function destroyStudent()
    {
        Student::find($this->student_id)->delete();
        session()->flash('message', 'Student Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->email = '';
        $this->course = '';
        $this->mobile = '';
    }

    public function render()
    {
        $students = Student::where('name', 'like', '%' . $this->search . '%')->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.student-show', ['students' => $students]);
    }
}
