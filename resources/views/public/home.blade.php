@extends('public-layout.navbar')

@section('content')
<div class="container bg-white">
    <br>
    <div class="row">
        <div class="col-md-8">
            <div class="border border-dark shadow-sm p-3 mb-3 bg-dark rounded">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <!-- <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                         </ol>-->
                         <div class="carousel-inner">
                           <div class="carousel-item active">
                             <img id="" class="d-block w-100" src="{{asset('image/book-review.jpg')}}" alt="First slide">
                            <!-- <div class="carousel-caption">
                                 <h3 style="color: black">You can Review Book Using Laptop</h3>
                             </div>-->
                           </div>
                           <div class="carousel-item">
                             <img id="" class="d-block w-100" src="{{asset('image/onlineReview.jpg')}}" alt="Second slide">
                           </div>
                           <div class="carousel-item">
                             <img id="" class="d-block w-100" src="{{asset('image/read.jpg')}}" alt="Third slide">
                           </div>
                         </div>
                         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                         </a>
                         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                         </a>
                       </div>
                    </div>

                    @if(count($reviews)>0)
                    @foreach($reviews as $review)
                        <div id="review" class="card mb-3">
                            <div class="card-body">
                              {{-- <div class="row">
                                <div class="col-md-12 mb-2">
                                  @if( !empty($review->user->profile_image))
                                    <img src="{{ asset('storage/profile_images/' . $review->user->profile_image)}}" class="rounded-circle mx-auto mb-2" alt="" width="45px" height="45px" alt="cover image"> 
                                      @else
                                      <img src="{{ asset('image/defaultprofile.png')}}" class="rounded-circle mx-auto mb-2" alt="" width="45px" height="45px" alt="cover image">
                                   @endif
                                   <b>{{$review->user->name}}</b>
                                </div>
                              </div> --}}
                                <div class="row">
                                    <div class="col-md-2 col-lg-2">
                                        <img style="width:100%; height:" src="{{ asset('storage/cover_images/' . $review->cover_image)}}" alt="cover image">
                                    </div>
                                    <div class="col-md-10 col-lg-10">
                                        <table>
                                          <tr>
                                            <th>Title:</th>
                                            <td>{{$review->title}}</td>
                                          </tr>
                                          <tr>
                                            <th> Author:</th>
                                            <td>{{$review->author}}</td>
                                          </tr>
                                          <tr>
                                            <th>ISBN No:</th>
                                            <td>{{$review->isbn_no}}</td>
                                          </tr>
                                        </table>
                                        {{substr($review->summaryOfBook, 0, 100)}} {{ strlen($review->summaryOfBook) > 100 ? "..." : ""}} <br>
                                        <a href="{{route('showMoreToRead', $review->id)}}" class="" style="font-size: 12pt">read more </a>
                                        <br>
                                        <small>Review by: {{$review->name}}</small>
                                        {{-- <a href="{{route('postReviews.show',$review->id)}}" class="btn btn-info">view</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                {{-- {{$reviews->links()}} --}}

            </div>
        <div class="col-md-4 bg-white">
            <img id="home_image" src="{{asset('image/book-review.png')}}" alt="Book review photo" width="100%">
            <br><br>
            <p>Book review give books greater visibility and a greater chance of 
                getting found by more readers. On some websites, books that have 
                more book reviews are more likey to be shown to prospectiv readers are and buyers as compared 
                to books with few or no book reviews.
            </p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14189.476762857566!2d91.1931498!3d27.2389482!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x281e6e8f6a9cf6ea!2sGyalpozhing%20College%20of%20Information%20Technology!5e0!3m2!1sen!2sbt!4v1613153170039!5m2!1sen!2sbt" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <br>
</div>
@endsection