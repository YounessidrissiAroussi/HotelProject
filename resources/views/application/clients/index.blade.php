@extends('app')
@section('head')
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('tables/fonts/icomoon/style.css')}}">

<link rel="stylesheet" href="{{asset('tables/css/owl.carousel.min.css')}}">

<link rel="stylesheet" href="{{asset('tables/css/style.css')}}">
@endsection
@section('main')
<div class="container">
    <h2 class="mb-5">Table #7</h2>

    <div class="table-responsive">

      <table class="table table-striped custom-table">
        <thead>
          <tr>
            <th scope="col">
              <label class="control control--checkbox">
                <input type="checkbox"  class="js-check-all"/>
                <div class="control__indicator"></div>
              </label>
            </th>
            <th scope="col">Order</th>
            <th scope="col">Name</th>
            <th scope="col">Occupation</th>
            <th scope="col">Contact</th>
            <th scope="col">Education</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr scope="row">
            <td>
              <label class="control control--checkbox">
              <input type="checkbox" />
              <div class="control__indicator"></div>
              </label>
            </td>
            <td>
            1392
            </td>
            <td class="pl-0">
              <div class="d-flex align-items-center">
                <label class="custom-control ios-switch">
                <input type="checkbox" class="ios-switch-control-input" checked="">
                <span class="ios-switch-control-indicator"></span>
                </label>

                <a href="#">James Yates</a>
              </div>
            </td>
            <td>
              Web Designer
              <small class="d-block">Far far away, behind the word mountains</small>
            </td>
            <td>+63 983 0962 971</td>
            <td>NY University</td>
            <td><a href="#" class="more">Details</a></td>
          
          </tr>

          <tr>

            <td>
              <label class="control control--checkbox">
              <input type="checkbox" />
              <div class="control__indicator"></div>
              </label>
            </td>
            
            <td>4616</td>
            <td class="pl-0">
              <div class="d-flex align-items-center">
                <label class="custom-control ios-switch">
                <input type="checkbox" class="ios-switch-control-input" checked="">
                <span class="ios-switch-control-indicator"></span>
                </label>

                <a href="#">Matthew Wasil</a>
              </div>

            </td>
            <td>
              Graphic Designer
              <small class="d-block">Far far away, behind the word mountains</small>
            </td>
            <td>+02 020 3994 929</td>
            <td>London College</td>
            <td><a href="#" class="more">Details</a></td>
          </tr>
          <tr>
            <td>
              <label class="control control--checkbox">
              <input type="checkbox" />
              <div class="control__indicator"></div>
              </label>
            </td>
            <td>9841</td>
            <td class="pl-0">
              <div class="d-flex align-items-center">
                <label class="custom-control ios-switch">
                <input type="checkbox" class="ios-switch-control-input">
                <span class="ios-switch-control-indicator"></span>
                </label>

                <a href="#">Sampson Murphy</a>
              </div>
              
            </td>
            <td>
              Mobile Dev
              <small class="d-block">Far far away, behind the word mountains</small>
            </td>
            <td>+01 352 1125 0192</td>
            <td>Senior High</td>
            <td><a href="#" class="more">Details</a></td>
          </tr>
          <tr>
            <td>
              <label class="control control--checkbox">
              <input type="checkbox" />
              <div class="control__indicator"></div>
              </label>
            </td>
            <td>9548</td>

            <td class="pl-0">
              <div class="d-flex align-items-center">
                <label class="custom-control ios-switch">
                <input type="checkbox" class="ios-switch-control-input">
                <span class="ios-switch-control-indicator"></span>
                </label>

                <a href="#">Gaspar Semenov</a>
              </div>
              
            </td>

            <td>
              Illustrator
              <small class="d-block">Far far away, behind the word mountains</small>
            </td>
            <td>+92 020 3994 929</td>
            <td>College</td>
            <td><a href="#" class="more">Details</a></td>
          </tr>

          <tr>
            <td>
              <label class="control control--checkbox">
              <input type="checkbox" />
              <div class="control__indicator"></div>
              </label>
            </td>
            <td>4616</td>
            <td class="pl-0">
              <div class="d-flex align-items-center">
                <label class="custom-control ios-switch">
                <input type="checkbox" checked="" class="ios-switch-control-input">
                <span class="ios-switch-control-indicator"></span>
                </label>

                <a href="#">Matthew Wasil</a>
              </div>
              
            </td>
            <td>
              Graphic Designer
              <small class="d-block">Far far away, behind the word mountains</small>
            </td>
            <td>+02 020 3994 929</td>
            <td>London College</td>
            <td><a href="#" class="more">Details</a></td>
          </tr>
          <tr>
            <td>
              <label class="control control--checkbox">
              <input type="checkbox" />
              <div class="control__indicator"></div>
              </label>
            </td>
            <td>9841</td>
            <td class="pl-0">
              <div class="d-flex align-items-center">
                <label class="custom-control ios-switch">
                <input type="checkbox" checked="" class="ios-switch-control-input">
                <span class="ios-switch-control-indicator"></span>
                </label>

                <a href="#">Sampson Murphy</a>
              </div>
              
            </td>

            <td>
              Mobile Dev
              <small class="d-block">Far far away, behind the word mountains</small>
            </td>
            <td>+01 352 1125 0192</td>
            <td>Senior High</td>
            <td><a href="#" class="more">Details</a></td>
          </tr>
          <tr>
            <td>
              <label class="control control--checkbox">
              <input type="checkbox" />
              <div class="control__indicator"></div>
              </label>
            </td>
            <td>9548</td>
            <td class="pl-0">
              <div class="d-flex align-items-center">
                <label class="custom-control ios-switch">
                <input type="checkbox" class="ios-switch-control-input">
                <span class="ios-switch-control-indicator"></span>
                </label>

                <a href="#">Gaspar Semenov</a>
              </div>
              
            </td>
            <td>
              Illustrator
              <small class="d-block">Far far away, behind the word mountains</small>
            </td>
            <td>+92 020 3994 929</td>
            <td>College</td>
            <td><a href="#" class="more">Details</a></td>
          </tr>
          
        </tbody>
      </table>
    </div>


  </div>
@endsection
@section('js')
<script src="{{asset('tables/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('tables/js/popper.min.js')}}"></script>
<script src="{{asset('tables/js/bootstrap.min.js')}}"></script>
<script src="{{asset('tables/js/main.js')}}"></script>
@endsection