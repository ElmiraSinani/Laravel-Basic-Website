@extends('layouts.app')

@section('content')

  <form class="" action="contact/submit" method="POST">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Name</label>
      <input id="name" type="text" name="name" class="form-control" placeholder="Enter Name"  />
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input id="email" type="email" name="email" class="form-control" placeholder="Enter Email"   />
    </div>
    <div class="form-group">
      <label for="email">Message</label>
      <textarea id="message"  name="message" class="form-control" placeholder="Enter Message" ></textarea>
    </div>
    <div class="">
      <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
    </div>

  </form>

@endsection
