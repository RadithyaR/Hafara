<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.css')

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
   </head>
   <!-- body -->
   <body>
        @include('home.header')


      <!--  contact -->
<!-- Contact Section Begin -->
<section class="contact-section spad">
   <div class="container">
       <div class="row">
           <div class="col-lg-4">
               <div class="contact-text">
                   <h2>Contact Info</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                       labore et dolore magna aliqua.</p>
                   <table>
                       <tbody>
                           <tr>
                               <td class="c-o">Address:</td>
                               <td>Jl. Sawahan No.48, RT.003/01, Sawahan, Kec. Padang Tim., Kota Padang, Sumatera Barat 25121</td>
                           </tr>
                           <tr>
                               <td class="c-o">Phone:</td>
                               <td>(+62) 81384930391</td>
                           </tr>
                           <tr>
                               <td class="c-o">Email:</td>
                               <td>info.colorlib@gmail.com</td>
                           </tr>
                       </tbody>
                   </table>
               </div>
           </div>
           <div class="col-lg-7 offset-lg-1">
               <form action="{{ route('contact') }}" method="post" class="contact-form">
                  @csrf
                   <div class="row">
                       <div class="col-lg-6">
                           <input type="text" placeholder="name" type="text" name="name" required>
                       </div>
                       <div class="col-lg-6">
                           <input type="text" placeholder="email" type="email" name="email" required>
                       </div>
<div class="col-lg-6">
                           <input type="text" placeholder="phone" type="number" name="phone" required>
                       </div>
                       <div class="col-lg-12">
                           <textarea placeholder="Message" type="text" name="message" required></textarea>
                           <button type="submit">Submit Now</button>
                       </div>
                   </div>
               </form>
           </div>
       </div>
       <div class="map">
           <iframe
               src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15957.100303122434!2d100.3688335!3d-0.9455047!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b9ed14f1138d%3A0xbf4329e93796e9ed!2sHAFARA%20GUESTHOUSE%20SYARIAH!5e0!3m2!1sid!2sid!4v1729828898137!5m2!1sid!2sid"
               height="470" style="border:0;" allowfullscreen=""></iframe>
       </div>
   </div>
</section>
<!-- Contact Section End -->

      <!-- end contact -->

      <!--  footer -->
      @include('home.footer')
      

   </body>
</html>