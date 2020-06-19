 <div class="form-group pb-2">
      <label for="name">Name of Child as Shown on Passport</label>
      <input type="text" name="name" value=" {{old('name') ?? $student->name}}" class="form-control">
       <div>
      {{$errors->first('name')}}
      </div>
   </div>

   <div class="form-group">
      <label for="dob">Date of Birth</label>
      <input type="date" name="dob" class="form-control" value="{{old('dob') ?? $student->dob}}">
   </div>
   
 
 <div class="form-group ">
   <label for="email">Email</label>
      <input type="text" name="email" value=" {{old('email') ?? $student->email}}" class="form-control">
      <div>
     {{$errors->first('email')}}
   </div>
   </div>

   <div class="form-group">
      <label for="school">Is the student in boarding or day?</label>
      <select name="school" id="school" class="form-control" >
         <option value="1">Boarding</option>
         <option value="0">Day School</option>
      </select>
   </div>
 
 
 @csrf
   