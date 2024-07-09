<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wealth Wave Crypto: Dashboard</title>
    <link rel="stylesheet" href="Assets/Css/style.css">
    <link rel="stylesheet" href="Assets/Css/withdraw.css">
    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" />
</head>
<body>
    <div class="container">
      
         <aside>
            <div class="top">
                 <div class="logo">
                      <img src="Assets/Images/logo.png" alt="">
                      <h2>Wealth <br><span class="danger">Wave</span></h2>
                 </div>
                 <div class="close" id="close-btn">
                     <span class="material-icons-sharp">close</span>
                 </div>   
               </div>

               <div class="sidebar">
                  <a href="index.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                  </a>

                  <a href="#" class="active">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>My Account</h3>
                  </a>

                  <a href="">
                    <span class="material-icons-sharp">event_repeat</span>
                    <h3>Daily Spin</h3>
                  </a>

                  <a href="#">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>messages</h3>
                    <span class="message-count">26</span>
                  </a>

                  <a href="invest.php">
                    <span class="material-icons-sharp">assured_workload</span>
                    <h3>investments</h3>
                  </a>


                  <a href="#">
                    <span class="material-icons-sharp">monetization_on</span>
                    <h3>Withdrawal</h3>
                  </a>

                  <a href="#">
                    <span class="material-icons-sharp">reduce_capacity</span>
                    <h3>Affiliate</h3>
                  </a>

                  <a href="#">
                    <span class="material-icons-sharp">event_available</span>
                    <h3>Updates</h3>
                  </a>

                  <a href="#">
                    <span class="material-icons-sharp">support_agent</span>
                    <h3>Assistant</h3>
                  </a>

<!-- 
                  <a href="#">
                    <span class="material-icons-sharp">paid</span>
                    <h3>Pricing</h3>
                  </a> -->

        
                  
                  <!-- <a href="#">
                    <span class="material-icons-sharp">add</span>
                    <h3>Add Participant</h3>
                  </a> -->
                 
                  <a class="last" href="logout.php" target="_self">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                  </a>
              </div>
         </aside>

         <!-- -----------END OF ASIDE ------------- -->

         <main>
            <h1>My Investments</h1>

             <div class="date">
                <p id="date-el"></p>
            </div>

<div class="insights">
                     
            <div class="bal">
                <h3>My Balance</h3>
                <h1>$7890</h1>
            </div>


                <div class="item add-product" id="invest-el">
                        <div>
                            <span class="material-icons-sharp">add</span>
                            <h3>Withdraw Funds</h3>
                        </div>
                </div>

</div>   
            <!-- -----------------End of Insights------- -->
            <div class="recent-orders">

                <h2>My Transactions</h2>
                <table>
                   <thead>
                        <tr>
                           <th>Date</th>
                           <th>Amount</th>
                           <th>Time</th>
                           <th>Id</th>
                           <th>Balance</th>
                           <th></th>
                        </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>20/03/2024</td>
                        <td>---Loading---</td>
                        <td>---Loading---</td>
                        <td class="warning">---Loading---</td>
                        <td>---Loading---</td>
                        <td class="primary">---Loading---</td>
                     </tr>

                      <tr>
                        <td>20/03/2024</td>
                        <td>---Loading---</td>
                        <td>---Loading---</td>
                        <td class="warning">---Loading---</td>
                        <td>---Loading---</td>
                        <td class="primary">---Loading---</td>
                      </tr>

                      <tr>
                        <td>20/03/2024</td>
                        <td>---Loading---</td>
                        <td>---Loading---</td>
                        <td class="warning">---Loading---</td>
                        <td>---Loading---</td>
                        <td class="primary">---Loading---</td>
                      </tr>


                      <tr>
                        <td>20/03/2024</td>
                        <td>---Loading---</td>
                        <td>---Loading---</td>
                        <td class="warning">---Loading---</td>
                        <td>---Loading---</td>
                        <td class="primary">---Loading---</td>
                      </tr>

                      <tr>
                        <td>20/03/2024</td>
                        <td>---Loading---</td>
                        <td>---Loading---</td>
                        <td class="warning">---Loading---</td>
                        <td>---Loading---</td>
                        <td class="primary">---Loading---</td>
                      </tr>

                      <tr>
                        <td>20/03/2024</td>
                        <td>---Loading---</td>
                        <td>---Loading---</td>
                        <td class="warning">---Loading---</td>
                        <td>---Loading---</td>
                        <td class="primary">---Loading---</td>
                      </tr>

                      
                      <tr>
                        <td>20/03/2024</td>
                        <td>---Loading---</td>
                        <td>---Loading---</td>
                        <td class="warning">---Loading---</td>
                        <td>---Loading---</td>
                        <td class="primary">---Loading---</td>
                      </tr>
                   </tbody>
                 </table>
              <a href="#">View More</a>
</div>
         </main>
         <!-- ---------END OF MAIN ---------- -->

         <div class="right">
               <div class="top">
                    <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                    </button>

                 <div class="theme-toggler">
                      <span class="material-icons-sharp active">light_mode</span>
                      <span class="material-icons-sharp">dark_mode</span>                    
                  </div>
                  <div class="profile">
                  <div class="info">
                       <p>Hello, <b>Hope</b></p>
                       <small class="text-muted">Evenning</small>
                    </div>
                    <div class="profile-photo">
                      <img src="Assets/Images/hope.jpg" alt="">
                    </div>
               </div>
           </div>
           <!-- END OF TOP -->
<div class="recent-updates">
        
<div class="sales-analytics">
                     <h2>My Investment analytics</h2>
                     <div class="item online">
                        <div class="icon">
                          <span class="material-icons-sharp">attach_money</span>
                        </div>
                        <div class="right">
                          <div class="info">
                            <h3>Bitcoin</h3>
                            <small class="text-muted">last 24hours</small>
                          </div>
                          <h5 class="success">82%</h5>
                          <h3>
                            <span class="material-icons-sharp">north</span>
                          </h3>
                        </div>
                    </div>

                    <div class="item offline">
                      <div class="icon">
                        <span class="material-icons-sharp">monetization_on</span>
                      </div>
                      <div class="right">
                        <div class="info">
                          <h3>Silver</h3>
                          <small class="text-muted">last 24hours</small>
                        </div>
                        <h5 class="warning">2%</h5>
                        <h3>
                          <span class="material-icons-sharp">south_east</span>
                        </h3>
                      </div>
                  </div>


                  <div class="item customers">
                    <div class="icon">
                      <span class="material-icons-sharp">currency_exchange</span>
                    </div>
                    <div class="right">
                      <div class="info">
                        <h3>Platnum</h3>
                        <small class="text-muted">last 24hours</small>
                      </div>
                      <h5 class="success">25%</h5>
                      <h3>
                        <span class="material-icons-sharp">north_west</span>
                      </h3>
                    </div>
                </div>
                <div class="item add-product">
                  <div>
                    <span class="material-icons-sharp">add</span>
                    <h3>Add New Investment</h3>
                  </div>
                </div>
                <!-- END OF UPDATES --> 
              </div>
          </div>                                           
</div>




  <!-- Invest Menu Start -->
  <div class="context-el">

      <div class="close-context" id="close-menu">
          <span class="material-icons-sharp">close</span>
      </div> 

      <div class="context-menu">
                <form action="">
                    <p id="title-el">Fill the details</p>
                        <div class="btns">
                            <label for="">Enter Amount</label>
                            <input type="text"  class="amount">
                            <label for="">Enter your Address</label>
                            <input type="text"  class="address">
                            <input type="button" value="Withdraw" class="withraw-btn">
                        </div> 
                </form>        
        </div>

   </div>
</div>
<!-- Context Menu End -->


       <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/65fabe941ec1082f04d94640/1hpdngv61';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

       <script src="Assets/Javascript/script.js"></script> 
       <script src="Assets/Javascript/fetch.js"></script>   
       <script src="Assets/Javascript/withdraw.js"></script> 
    </body>
</html>

<!-- 1:23:28 -->