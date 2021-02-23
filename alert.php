<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <!-- font awesome -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <style type="text/css">
         .alert-btn {
         background: #14222B;
         color: #fff;
         font-size: 14px;
         border-radius: 0px;
         }
         .alert-btn .alert-paragraph {
         display: inline-block;
         padding-left: 1%;
         }
         .alert-body .close {
         float: right;
         color: #fff;
         opacity: 1;
         outline: none;
         }
         .alert-body img {
         display: inline-block;
         }
         .alert-body a {
         text-decoration: none;
         color: #2DBCB2;
         }
         .close:focus,
         .close:hover {
         outline: none;
         }
         .bs-example{
         margin: 20px;
         }
         .bs-example h1, h2{
         font-weight: 700;
         }

       .modal-width{
            width: 1100px;
            margin-left: -330px;
         }

         .modal-content {
         border-radius:10px;
         }
         .bs-example h4{
         font-weight: 600;
         padding-bottom: 10px;
         padding-top: 10px;
         }
         .covid-content{
         background: #14222B;
         color: #2DBCB2;
         padding: 16px;
         border-radius: 10px;
         }
         .bg-flying{
         background: #FAFBFD;
         border-radius: 10px;
         border: 1px solid #D1D2D3;
         }
         .close:focus,
         {
         outline: none;
         padding: 1rem 0rem;
         margin: -1rem 0rem -1rem auto;
         }
         .close:hover{
         outline: none;
         }

         


@media only screen and (max-width: 1200px) {

       .modal-width{
            width: 1100px;
            margin-left: -350px;
         }


}

@media only screen and (max-width: 1024px) {

.modal-width{
            width: 1000px;
            margin-left: -300px;
         }


}


@media only screen and (max-width: 992px) {

.modal-width{
            width: 800px;
            margin-left: -200px;
         }


}


@media only screen and (max-width: 768px) {

   .modal-width{
            width:100%;
            margin-left: 0px;
            
         }

}


@media only screen and (max-width: 280px) {



         .bs-example h1, h2 {
   
    font-size: 16px;
}

.bs-example h4 {
    
    
    font-size: 16px;
}

.bs-example p {
   
    font-size: 14px;
}

}


      </style>
   </head>
   <body>
      <div class="w-100 alert-body">
         <div class="alert alert-btn " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="d-flex justify-content-center">
               <img src="assets/icons/alert-icon.svg">&nbsp;
               <strong> COVID-19 (Coronavirus) Update</strong>
               <span class="alert-paragraph">
               <a href="#" data-toggle="modal" data-target="#extraLargeModal">Learn more &nbsp;<i class="fas fa-arrow-right"></i></a></span>
            </div>
         </div>
      </div>



      <div class="container-fluid">
         <div class="bs-example">
            <!-- Extra Large modal -->
            <div id="extraLargeModal" class="modal fade " tabindex="-1" role="dialog">
               <div class="modal-dialog modal-xl">
                  <div class="modal-content modal-width">
                     <div class="modal-header text-center">
                        <div class="col d-flex justify-content-center align-self-center">
                           <img src="assets/icons/megaphone.svg">
                           <h2 class="modal-title">&nbsp;&nbsp;COVID-19 (Coronavirus) Update</h2>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     </div>
                     <div class="modal-body">
                        <div class="row d-flex justify-content-center text-center">
                           <div class="col-lg-3 col-md-12  col-12">
                              <h4>Confirmed Cases</h4>
                              <div class="covid-content">
                                 <h1>11,200</h1>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-12  col-12">
                              <h4>Active Cases</h4>
                              <div class="covid-content">
                                 <h1>10,000</h1>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-12  col-12">
                              <h4>Death</h4>
                              <div class="covid-content">
                                 <h1>1,240</h1>
                              </div>
                           </div>
                        </div>
                        <div class="row my-5 d-flex justify-content-center">
                           <div class="col-md-10 bg-flying py-3">
                              <h4>Flying to Nigeria?
                              </h4>
                              <p>A PCR test if required within 4 days (96 Hours) before Departure and a repeat test is required 7 days after arrival.<br> Render Health will be providing links to certified private labs for testing.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>