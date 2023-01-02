@extends('template.template')

@section('content')
<div class="container-mx-auto mt-3 text-center">
  <h1 class="AboutUsHeader font-poppins">Who are we?</h1>
</div>
<section class="container mx-auto counting-area">
  <div class="grid cols-1 lg-cols-2">
      <div class="grid-one text-center md-text-left">
          <span class="d-inline btn btn-primary bg-gradient-peach text-red">Our Family</span>
          <div class="font-poppins ">
              <h1 class="text-lg text-dark py-5 mx-2">
                  Kami adalah Keluarga Besar Marga Lie Pekanbaru!
              </h1>

              <p class="text-gray mx-auto mdmx-initial">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit vel, est animi rem aperiam
                  minima ullam unde voluptatem consequuntur repellat nesciunt quia quos velit suscipit, labore
                  distinctio eos maxime facilis repellendus id, molestiae ex iste laborum voluptatibus. Illo,
                  dolor maiores.
              </p>
          </div>
      </div>

      <div class="grid-two">
          <img class="aboutusIMG" src="./assets/aboutus/margalieaboutus.jpeg" alt="Marga Lie" width="100%">
          </div>
      </div>
  </div>
</section>
@endsection