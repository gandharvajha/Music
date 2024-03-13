<?php include("header.php") ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	
<script src="audioplayer/js/mediaelement-and-player.min.js"></script>
<link rel="stylesheet" href="audioplayer/css/font-awesome.min.css" />
	<style type="text/css">
		.audio-player { margin: 0 auto;}
	</style>

<div  style="margin-top: 82px;">
      &nbsp;

    
  </div>


<div class="container-fluid trending">
    <div class="container my-2">
      <div>
        <h4 class="">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
          </svg>
            <span>
            POPULAR SONGS
            </span>
            
        </h4>
      </div>
      
    </div>
  </div>


  <div class="container-fluid  song-card-section">
    <div class="container my-2">
       <div class="row">
        <div class="col-xl-3 col-xxl-3 col-md-3 col-sm-10 my-2">
          <div>
            <img src="image/image1.jpeg" alt="" style="width:100%;">
          </div>
          <div class="singer-block">
            <a class="music-detail__link" href="#">
              <h2 class="music__heading"><span class="music__singer">Taylor Swift <span style="float:right;margin-right:5px;">Paid</span></span>
              <span class="music__heading--title">Anti-Hero (Acoustic Version) </span></h2>
            </a>
            <li class="right-click">
              <span style="color:white;"><strong>by</strong> <a href="#"><strong>Taylor Swift</strong></a></span>
              <img src="image/check-304167.svg" alt="">
            </li>
            <li class="dot-style-section" onclick="showcontent()" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
              <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
            </svg>
            <li id="mydiv" >
              <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg></span>
              <span> Like</span>
            </li>
            </li>
           
          </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-md-3 col-sm-10 my-2">
          <div>
            <img src="image/image3.jpeg" alt="" style="width:100%;">
          </div>
          <div class="singer-block">
            <a class="music-detail__link" href="#">
              <h2 class="music__heading"><span class="music__singer">Taylor Swift <span style="float:right;margin-right:5px;">Paid</span></span><span class="music__heading--title">Anti-Hero (Acoustic Version) </span></h2>
            </a>
            <li class="right-click">
              <span style="color:white;"><strong>by</strong> <a href="#"><strong>Taylor Swift</strong></a></span>
              <img src="image/check-304167.svg" alt="">
            </li>
            <li class="dot-style-section"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
              <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
            </svg></li>
          </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-md-3 col-sm-10 my-2">
          <div>
            <img src="image/singer.jpeg" alt="" style="width:100%;">
          </div>
          <div class="singer-block">
            <a class="music-detail__link" href="#">
              <h2 class="music__heading"><span class="music__singer">Taylor Swift<span style="float:right;margin-right:5px;">Unpaid</span></span><span class="music__heading--title">Anti-Hero (Acoustic Version) </span></h2>
            </a>
            <li class="right-click">
              <span style="color:white;"><strong>by</strong> <a href="#"><strong>Taylor Swift </strong></a></span>
              <img src="image/check-304167.svg" alt="">
            </li>
            <li class="dot-style-section"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
              <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
            </svg></li>
          </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-md-3 col-sm-10 my-2">
          <div>
            <img src="image/image4.jpeg" alt="" style="width:100%;">
          </div>
          <div class="singer-block">
            <a class="music-detail__link" href="#">
              <h2 class="music__heading"><span class="music__singer">Taylor Swift <span style="float:right;margin-right:5px;">Unpaid</span></span><span class="music__heading--title">Anti-Hero (Acoustic Version) </span></h2>
            </a>
            <li class="right-click">
              <span style="color:white;"><strong>by</strong> <a href="#"><strong>Taylor Swift</strong></a></span>
              <img src="image/check-304167.svg" alt="">
            </li>
            <li class="dot-style-section"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
              <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
            </svg></li>
          </div>
        </div>
       
       </div>
    </div>
  </div> 

  <div class="container-fluid trending">
    <div class="container my-2">
      <div>
        <h4 class="">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
          </svg>
            <span>
            POPULAR SONGS
            </span>
            <span>
              <a class="button button__more_view" href="trending.php">View All</a>
            </span>
        </h4>
      </div>
      
    </div>
  </div>

  <div class="container-fluid song-list-banner my-4">
    <div class="container">
      <!-- <div class="row">
        <div class="col-xl-2 col-xxl-2 col-md-2 col-sm-10">
          <img src="image/singer.jpeg" alt="" style="width:100%;margin-top: -7px;">
        </div>
        <div class="col-xl-8 col-xxl-8 col-md-8 col-sm-10">
          <h4><strong>Red Dead</strong></h4> 
          <h5>Manifest, Polo G & Calboy</h5>
          <li>
            <span>
              Release Date: 
            </span>
            <span>
              December 2, 2022
            </span>
          </li>
        </div>
        <div class="col-xl-4 col-xxl-4 col-md-4 col-sm-10 mobilefacebook-twitter">
          <ul>
            <li>
             <span style="margin-right:5px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </svg>
             </span>
             <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
             </span>
             
            </li>
          </ul>
        </div>
      </div> -->
      
      <div class="row audioplayer-01">
   <div class="col-12">
      <!-- Audio Player HTML -->
      <div class="audio-player">
         <img class="cover" src="audioplayer/img/cover.png" alt="">
         <div class="audioplayer-wrap">
            <div class="col-xl-8 col-xxl-8 col-md-8 col-sm-10">
               <h4><strong>Red Dead</strong></h4>
               <h5>Manifest, Polo G &amp; Calboy</h5>
               <ul>
                  <li>
                     <span>
                     Release Date:  
                     </span>
                     <span>
                     December 2, 2022
                     </span>
                  </li>
               </ul>
            </div>
            <div class="col-xl-4 col-xxl-4 col-md-4 col-sm-10 mobilefacebook-twitter">
               <ul>
                  <li>
                     <span style="margin-right:5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                           <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                     </span>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                           <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
         <audio id="audio-player" src="audioplayer/media/demo.mp3" type="audio/mp3" controls="controls"></audio>
      </div>
   </div>
</div>

<div class="row audioplayer-01">
   <div class="col-12">
      <!-- Audio Player HTML -->
      <div class="audio-player">
         <img class="cover" src="audioplayer/img/cover.png" alt="">
         <div class="audioplayer-wrap">
            <div class="col-xl-8 col-xxl-8 col-md-8 col-sm-10">
               <h4><strong>Red Dead</strong></h4>
               <h5>Manifest, Polo G &amp; Calboy</h5>
               <ul>
                  <li>
                     <span>
                     Release Date:  
                     </span>
                     <span>
                     December 2, 2022
                     </span>
                  </li>
               </ul>
            </div>
            <div class="col-xl-4 col-xxl-4 col-md-4 col-sm-10 mobilefacebook-twitter">
               <ul>
                  <li>
                     <span style="margin-right:5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                           <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                     </span>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                           <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
         <audio id="audio-player" src="audioplayer/media/demo.mp3" type="audio/mp3" controls="controls"></audio>
      </div>
   </div>
</div>


<div class="row audioplayer-01">
   <div class="col-12">
      <!-- Audio Player HTML -->
      <div class="audio-player">
         <img class="cover" src="audioplayer/img/cover.png" alt="">
         <div class="audioplayer-wrap">
            <div class="col-xl-8 col-xxl-8 col-md-8 col-sm-10">
               <h4><strong>Red Dead</strong></h4>
               <h5>Manifest, Polo G &amp; Calboy</h5>
               <ul>
                  <li>
                     <span>
                     Release Date:  
                     </span>
                     <span>
                     December 2, 2022
                     </span>
                  </li>
               </ul>
            </div>
            <div class="col-xl-4 col-xxl-4 col-md-4 col-sm-10 mobilefacebook-twitter">
               <ul>
                  <li>
                     <span style="margin-right:5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                           <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                     </span>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                           <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
         <audio id="audio-player" src="audioplayer/media/demo.mp3" type="audio/mp3" controls="controls"></audio>
      </div>
   </div>
</div>

<div class="row audioplayer-01">
   <div class="col-12">
      <!-- Audio Player HTML -->
      <div class="audio-player">
         <img class="cover" src="audioplayer/img/cover.png" alt="">
         <div class="audioplayer-wrap">
            <div class="col-xl-8 col-xxl-8 col-md-8 col-sm-10">
               <h4><strong>Red Dead</strong></h4>
               <h5>Manifest, Polo G &amp; Calboy</h5>
               <ul>
                  <li>
                     <span>
                     Release Date:  
                     </span>
                     <span>
                     December 2, 2022
                     </span>
                  </li>
               </ul>
            </div>
            <div class="col-xl-4 col-xxl-4 col-md-4 col-sm-10 mobilefacebook-twitter">
               <ul>
                  <li>
                     <span style="margin-right:5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                           <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                     </span>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                           <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
         <audio id="audio-player" src="audioplayer/media/demo.mp3" type="audio/mp3" controls="controls"></audio>
      </div>
   </div>
</div>

<div class="row audioplayer-01">
   <div class="col-12">
      <!-- Audio Player HTML -->
      <div class="audio-player">
         <img class="cover" src="audioplayer/img/cover.png" alt="">
         <div class="audioplayer-wrap">
            <div class="col-xl-8 col-xxl-8 col-md-8 col-sm-10">
               <h4><strong>Red Dead</strong></h4>
               <h5>Manifest, Polo G &amp; Calboy</h5>
               <ul>
                  <li>
                     <span>
                     Release Date:  
                     </span>
                     <span>
                     December 2, 2022
                     </span>
                  </li>
               </ul>
            </div>
            <div class="col-xl-4 col-xxl-4 col-md-4 col-sm-10 mobilefacebook-twitter">
               <ul>
                  <li>
                     <span style="margin-right:5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                           <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                     </span>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                           <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
         <audio id="audio-player" src="audioplayer/media/demo.mp3" type="audio/mp3" controls="controls"></audio>
      </div>
   </div>
</div>

<div class="row audioplayer-01">
   <div class="col-12">
      <!-- Audio Player HTML -->
      <div class="audio-player">
         <img class="cover" src="audioplayer/img/cover.png" alt="">
         <div class="audioplayer-wrap">
            <div class="col-xl-8 col-xxl-8 col-md-8 col-sm-10">
               <h4><strong>Red Dead</strong></h4>
               <h5>Manifest, Polo G &amp; Calboy</h5>
               <ul>
                  <li>
                     <span>
                     Release Date:  
                     </span>
                     <span>
                     December 2, 2022
                     </span>
                  </li>
               </ul>
            </div>
            <div class="col-xl-4 col-xxl-4 col-md-4 col-sm-10 mobilefacebook-twitter">
               <ul>
                  <li>
                     <span style="margin-right:5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                           <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                     </span>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                           <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
         <audio id="audio-player" src="audioplayer/media/demo.mp3" type="audio/mp3" controls="controls"></audio>
      </div>
   </div>
</div>

</div>
  </div>
  <?php include("footer.php") ?>
  <style>
  .row.audioplayer-01 {
    border-bottom: 16px solid #00000021;
}

.song-list-banner .container .row {
    background-color: #183658;
    padding: 0px 0px 26px 0px;
}
</style>
  <link rel="stylesheet" href="audioplayer/css/style.css" media="screen">
  
  <script>
		$(document).ready(function() {
			$('audio').mediaelementplayer({
				alwaysShowControls: true,
				features: ['playpause','volume','progress'],
				audioVolume: 'horizontal',
				audioWidth: "100%",
				audioHeight: 220
			});
		});
	</script>