<div class="form-group">
    <label for="name">Name:</label>
    <input name="name" type="text" class="form-control" value="{{old('name') ?? $customer->name}}">
    <p class="form-text text-danger">
        {{$errors->first('name')}}
    </p>
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input name="email" id="email" type="text" class="form-control" value="{{old('email') ?? $customer->email}}">
    <span class="form-text text-danger">
        {{$errors->first('email')}}
    </span>
</div>
<div class="form-group">
    <label for="active">Status:</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select customer status</option>

        @foreach ($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{$activeOptionKey}}" {{ $customer->active == $activeOptionValue ? 'selected' : ''}}>
                {{$activeOptionValue}}
            </option> 
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="company_id">Company:</label>
    <select name="company_id" id="company_id" class="form-control">
        @foreach ($companies as $company)
            <option value="{{$company->id}}" {{ $company->id == $customer->company_id ? 'selected' : ''}}>
                {{$company->name}}
            </option>                        
        @endforeach
    </select>
</div>
<div class="form-group d-flex flex-column">
    <label for="image">Profile image:</label>
    <input name="image" id="image" type="file" class="py-2">
    <span class="form-text text-danger">
        {{$errors->first('image')}}
    </span>
</div>

@csrf