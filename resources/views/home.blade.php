@extends('layouts.app')

<style>
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        fieldset, label { margin: 0; padding: 0; }
        body{ margin: 20px; }
        h1 { font-size: 1.5em; margin: 10px; }
        
        /****** Style Star Rating Widget *****/
        
        .rating { 
          border: none;
          float: left;
        }
        
        .rating > input { display: none; } 
        .rating > label:before { 
          margin: 5px;
          font-size: 1.25em;
          font-family: FontAwesome;
          display: inline-block;
          content: "\f005";
        }
        
        .rating > .half:before { 
          content: "\f089";
          position: absolute;
        }
        
        .rating > label { 
          color: #ddd; 
         float: right; 
        }
        
        /***** CSS Magic to Highlight Stars on Hover *****/
        
        .rating > input:checked ~ label, /* show gold star when clicked */
        .rating:not(:checked) > label:hover, /* hover current star */
        .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */
        
        .rating > input:checked + label:hover, /* hover current star when changing rating */
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
        .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><strong>Your Work</strong></div>

                <div class="card-body">
                    @if (session('Success'))
                        <div class="alert alert-success">
                            {{ session('Success') }}
                        </div>
                    @endif

                    <table class="table table-bordered"> 
                        <tr style="background-color: aqua;">
                                <td><strong>Name</strong></td>
                                <td><strong>Work Done</strong></td>
                                <td><strong>Your Average Rating</strong></td>
                                <td><strong>Your Likes</strong></td>
                        </tr>
                         @foreach($usersview as $row) 
                         <tr>
                          <td>{{$row->name}}</td>
                          <td>{{$row->work}}</td>
                          <td><fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset></td>
                          <td></td>
                        </tr>
                        @endforeach 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
