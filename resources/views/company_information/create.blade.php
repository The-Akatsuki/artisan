@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New company_information</h1>
    <hr/>

    {!! Form::open(['url' => '/company_information', 'class' => 'form-horizontal']) !!}

    <div class="form-group {{ $errors->has('company_name') ? 'has-error' : ''}}">
        {!! Form::label('company_name', 'Company Name', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('company_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('registration_no') ? 'has-error' : ''}}">
        {!! Form::label('registration_no', 'Registration No', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('registration_no', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('registration_no', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('company_type') ? 'has-error' : ''}}">
        {!! Form::label('company_type', 'Company Type', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('company_type', null, ['class' => 'form-control']) !!}
            {!! $errors->first('company_type', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('company_description') ? 'has-error' : ''}}">
        {!! Form::label('company_description', 'Company Description', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::textarea('company_description', null, ['class' => 'form-control']) !!}
            {!! $errors->first('company_description', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact_person') ? 'has-error' : ''}}">
        {!! Form::label('contact_person', 'Contact Person', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('contact_person', null, ['class' => 'form-control']) !!}
            {!! $errors->first('contact_person', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact_person_designation') ? 'has-error' : ''}}">
        {!! Form::label('contact_person_designation', 'Contact Person Designation', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('contact_person_designation', null, ['class' => 'form-control']) !!}
            {!! $errors->first('contact_person_designation', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('landline_number') ? 'has-error' : ''}}">
        {!! Form::label('landline_number', 'Landline Number', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('landline_number', null, ['class' => 'form-control']) !!}
            {!! $errors->first('landline_number', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mobile_number') ? 'has-error' : ''}}">
        {!! Form::label('mobile_number', 'Mobile Number', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::number('mobile_number', null, ['class' => 'form-control']) !!}
            {!! $errors->first('mobile_number', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('other_numbers') ? 'has-error' : ''}}">
        {!! Form::label('other_numbers', 'Other Numbers', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('other_numbers', null, ['class' => 'form-control']) !!}
            {!! $errors->first('other_numbers', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact_email') ? 'has-error' : ''}}">
        {!! Form::label('contact_email', 'Contact Email', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('contact_email', null, ['class' => 'form-control']) !!}
            {!! $errors->first('contact_email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('website') ? 'has-error' : ''}}">
        {!! Form::label('website', 'Website', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('website', null, ['class' => 'form-control']) !!}
            {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('adress') ? 'has-error' : ''}}">
        {!! Form::label('adress', 'Adress', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::textarea('adress', null, ['class' => 'form-control']) !!}
            {!! $errors->first('adress', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
        {!! Form::label('country', 'Country', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('country', [''=>'Select Country'], null, ['class' => 'form-control', 'id'=>'country' ,'onchange'=>'set_states($(this).val())']) !!}
            {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
        {!! Form::label('state', 'State', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('state', [''=>'Select State'],null, ['class' => 'form-control', 'id'=>'states', 'onchange'=>'set_cities($(this).val())']) !!}
            {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
        {!! Form::label('city', 'City', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('city', [''=>'Select City'], null, ['class' => 'form-control', 'id'=>'cities']) !!}
            {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('pincode') ? 'has-error' : ''}}">
        {!! Form::label('pincode', 'Pincode', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::number('pincode', null, ['class' => 'form-control']) !!}
            {!! $errors->first('pincode', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('timezone') ? 'has-error' : ''}}">
        {!! Form::label('timezone', 'Timezone', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::number('timezone', null, ['class' => 'form-control']) !!}
            {!! $errors->first('timezone', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

</div>

<script>
    /*
     * Script to Load Dynamic States and Cities on Country Dropdown
     * 
     */
    @if(isset($countries))
    var countries = {!! $countries !!}
    var states = {!! $states !!}
    var cities = {!! $cities !!}
    
    function set_countries()
    {
        $.each(countries, function(index, value){
                $("#country").append("<option value='"+value.id+"'>"+value.country_name+"</option>");
                console.log(value.country_name);
            })
    }
    
    function set_states($country_id)
    {
        $("#states").html('<option value="">Select State</option');
        $("#cities").html('<option value="">Select City</option');
        $.each(states, function(index, value){
            if(value.country_id == $country_id){
                $("#states").append("<option value='"+value.id+"'>"+value.state_name+"</option>");
                console.log(value.state_name);
            }
        })
    }
    
    function set_cities($state_id)
    {
        $("#cities").html('<option value="">Select City</option');
        $.each(cities, function(index, value){
            if(value.state_id == $state_id){
                $("#cities").append("<option value='"+value.id+"'>"+value.city_name+"</option>");
                console.log(value.city_name);
            }
        })
    }
    
    function init_page(){
        set_countries();
    }
     
    
    @endif
</script>

@endsection