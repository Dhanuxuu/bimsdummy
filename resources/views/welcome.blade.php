@extends('layouts.app')

@section('content')
<div id="app" style="padding: 16px;margin-top: 30px;">
    <h1>Welcome to Red-Lifestream</h1>
    <div class="card-body p-4 p-md-5">
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="bloodeducation">Blood Education</h3>
        <div class="card-body p-4 p-md-5">
            <div class="row justify-content-center align-items-center h-50">
    
                <div class="col-md-6 mb-4">
                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Red Blood Cells</h5>
                    <table>
                        <tr>
                            <td style="width: 250px;"><img src="#"></td>
                            <td style="width: 350px;">
                                <p>Lorem ipsum dolor sit amet. Et cupiditate error qui voluptatibus sunt et voluptatem
                                    voluptate.
                                    Aut aliquam exercitationem quo debitis voluptas hic porro quidem ut voluptatem nisi ab
                                    natus
                                    doloremque non quam officia id vero numquam.</p>
                            </td>
                        </tr>
                    </table>
                </div>
    
                <div class="col-md-6 mb-4">
                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Platelets</h5>
                    <table>
                        <tr>
                            <td style="width: 250px;"><img src="#"></td>
                            <td style="width: 350px;">
                                <p>Lorem ipsum dolor sit amet. Et cupiditate error qui voluptatibus sunt et voluptatem
                                    voluptate.
                                    Aut aliquam exercitationem quo debitis voluptas hic porro quidem ut voluptatem nisi ab
                                    natus
                                    doloremque non quam officia id vero numquam.</p>
                            </td>
                        </tr>
                    </table>
                </div>
    
            </div>
    
            <div class="row justify-content-center align-items-center h-50">
    
                <div class="col-md-6 mb-4">
                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Plasma</h5>
                    <table>
                        <tr>
                            <td style="width: 250px;"><img src="#"></td>
                            <td style="width: 350px;">
                                <p>Lorem ipsum dolor sit amet. Et cupiditate error qui voluptatibus sunt et voluptatem
                                    voluptate.
                                    Aut aliquam exercitationem quo debitis voluptas hic porro quidem ut voluptatem nisi ab
                                    natus
                                    doloremque non quam officia id vero numquam.</p>
                            </td>
                        </tr>
                    </table>
                </div>
    
                <div class="col-md-6 mb-4">
                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">White Blood Cells</h5>
                    <table>
                        <tr>
                            <td style="width: 250px;"><img src="#"></td>
                            <td style="width: 350px;">
                                <p>Lorem ipsum dolor sit amet. Et cupiditate error qui voluptatibus sunt et voluptatem
                                    voluptate.
                                    Aut aliquam exercitationem quo debitis voluptas hic porro quidem ut voluptatem nisi ab
                                    natus
                                    doloremque non quam officia id vero numquam.</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
    
        </div>
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="camp">Blood Donation Camp</h3>
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="availability">Blood Availability</h3>
        <div class="col-md-6 mb-4" align="center">
                <a href="#"><button class="btn btn-primary">
                        {{ __('Blood Availability') }}
                    </button></a>
            </div>
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="join">Be a part of our Red-Lifestream</h3>
        <div class="row">
            <div class="col-md-6 mb-4" align="center">
                <a href="{{route('register')}}"><button class="btn btn-primary">
                        {{ __('Register as a donor') }}
                    </button></a>
            </div>
            <div class="col-md-6 mb-4" align="center">
                <a href="{{route('register')}}"><button class="btn btn-primary">
                        {{ __('Register as a hospital/Bloodbank staff') }}
                    </button></a>
            </div>
        </div>
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="gallery">Gallery</h3>
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="about">About Us</h3>
        <p>
            Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum
            non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit
            voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
            Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum
            non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit
            voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
            Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum
            non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit
            voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
            Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum
            non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit
            voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
        </p>
        <br><br>
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="contact">Contact Us</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <p>
                        Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum
                        non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit
                        voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
                        Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum
                        non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit
                        voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
                    </p>
                </div>
                <div class="col-md-6 mb-4">
                    <form class="book-form">
                        <!-- <h3>Book an Appointment</h3> -->
                        <div class="row align-items-center">
                            <div class="mb-3 mb-md-4 col-md-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="mb-3 mb-md-4 col-md-6">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                            <div class="mb-3 mb-md-4 col-md-12">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3 mb-md-4 col-md-12">
                                <div class="form-control-wrap">
                                    <input type="text" id="cf-4" placeholder="what can we help you with"
                                        class="form-control datepicker px-3">
                                    <span class="icon icon-date_range"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection