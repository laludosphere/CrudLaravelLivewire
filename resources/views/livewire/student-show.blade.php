<div>
    @include('livewire.studentmodal')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <h5 class="alert alert-success">{{ session('message') }}</h5>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Dashboard Studend
                            <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Search..." style="width: 230px" />
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentModal">
                                 <i class="fa-solid fa-plus" ></i>
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Course</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->mobile }}</td>
                                        <td>{{ $student->course }}</td>
                                        <td>                          
                                            <i class="fa-solid fa-eye" data-bs-toggle="modal" data-bs-target="#showStudentModal" wire:click="showStudent({{$student->id}})"></i>
                                            <i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#updateStudentModal" wire:click="editStudent({{$student->id}})"></i>                            
                                            <i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#deleteStudentModal" wire:click="deleteStudent({{$student->id}})"></i>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Record Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>