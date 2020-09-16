<!--View Update Page-->
<html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/css/user.css" />  
   <head>
      <title>User Management | Edit</title>
   </head>
   
   <body>
      <div class="container">
      <form action = "/edit/<?php echo $users[0]->user_id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
             <!-- change name-->
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'name' 
                     value = '<?php echo$users[0]->name; ?>'/>
               </td>
            </tr>
            <!-- change lastname-->
            <tr>
               <td>Lastname</td>
               <td>
                  <input type = 'text' name = 'lastname' 
                     value = '<?php echo$users[0]->lastname; ?>'/>
               </td>
            </tr>
            <!-- submit -->
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update user" />
               </td>
            </tr>
         </table>
      </form>
   </div>
   </body>
</html>