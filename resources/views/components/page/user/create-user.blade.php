<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-sm-end">
            <a class="btn btn-primary btn-sm float-end" href="{{route('user.index')}}">
                <i class="ri-arrow-go-back-line align-bottom "></i> Back
            </a>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('user.store')}}" method="POST" class="needs-validation" novalidate id="addUserForm">
            @csrf
            <div class="row g-3 live-preview">
                <div class="col-lg-12">
                    <label for="name" class="form-label">Name</label> <span class="text-danger">*</span>
                    <input class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" required name="name" value="{{old('name')}}"
                           type="text"
                           id="name">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
                <div class="col-lg-6">
                    <label for="email" class="form-label">Email ID</label> <span
                            class="text-danger">*</span>
                    <input class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email ID" required name="email"
                           type="email" id="email" value="{{old('email')}}">
                    @error('email')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input class="form-control" placeholder="Enter Phone Number" name="phone" value="{{old('phone')}}"
                           type="text"
                           id="phone">
                </div>
                <div class="col-lg-12">
                    <label for="role" class="form-label">Role</label> <span class="text-danger">*</span>
                    <select name="role" id="role" class="form-select select2 @error('role') is-invalid @enderror" multiple required>
                        @foreach ($roles as $key => $value)
                            <option value="{{ $key }}" {{old('role') === $key ? 'selected' : ''}}>{{ $value }}</option>
                        @endforeach
                    </select>
                    @error('role')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="col-lg-6">
                    <label for="password" class="form-label">Password</label> <span class="text-danger">*</span>
                    <input class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" required name="password"
                           type="password" id="password">
                    @error('password')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <label for="password_confirmation" class="form-label">Confirm Password</label> <span
                            class="text-danger">*</span>
                    <input class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Enter Confirm Password" required
                           name="password_confirmation" type="password" id="password_confirmation">
                    @error('password_confirmation')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mt-3">
                <div class="d-flex gap-2 justify-content-end">
                    <button class="btn btn-light" data-bs-dismiss="modal" type="button">Close</button>
                    <button class="btn btn-success" type="submit">Add User</button>
                </div>
            </div>
        </form>
    </div>
</div>