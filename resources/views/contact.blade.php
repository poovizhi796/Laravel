@extends('master.app')
@section('title', 'Contact Us')
@section('content')
@component('component.alert', ['type' => 'danger'])
  You have clicked Contact page od Test Project..Welcome...!
@endcomponent
    <h3 class="nav justify-content-center">Contact With Us</h3>
    <div class="column form-group mt-4">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" class="form-control" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country" class="form-control">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" rows="2" class="form-control" name="subject" placeholder="Write something.."></textarea>
        <input type="submit" value="Submit" class="btn btn-outline-success mt-4" value="Contact With US">
      </form>
    </div>
@endsection