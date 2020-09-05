<!--View Update Page-->
<html>
   
   <head>
      <title>User Management | Edit</title>
   </head>
   
   <body>
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
   </body>
</html>