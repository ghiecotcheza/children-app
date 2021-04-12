<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bulma Tutorial</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
   </head>
   <body>
      <section class="section">
         <div class="columns">
            <div class="column is-4 is-offset-4">
               <div class="field">
                  <label class="label">Name</label>
                  <div class="control">
                     <input class="input" type="text" placeholder="Text input">
                  </div>
               </div>
               <div class="field">
                  <label class="label">Username</label>
                  <div class="control has-icons-left has-icons-right">
                     <input class="input is-success" type="text" placeholder="Text input" value="bulma">
                     <span class="icon is-small is-left">
                     <i class="fa fa-user"></i>
                     </span>
                     <span class="icon is-small is-right">
                     <i class="fa fa-check"></i>
                     </span>
                  </div>
                  <p class="help is-success">This username is available</p>
               </div>
               <div class="field">
                  <label class="label">Email</label>
                  <div class="control has-icons-left has-icons-right">
                     <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
                     <span class="icon is-small is-left">
                     <i class="fa fa-envelope"></i>
                     </span>
                     <span class="icon is-small is-right">
                     <i class="fa fa-warning"></i>
                     </span>
                  </div>
                  <p class="help is-danger">This email is invalid</p>
               </div>
               <div class="field">
                  <label class="label">Phone</label>
                  <div class="control">
                     <input class="input" type="text" placeholder="Phone Number">
                  </div>
               </div>
               <div class="field">
                  <label class="label">Gender</label>
                  <div class="control">
                     <div class="select">
                        <select>
                           <option>Select</option>
                           <option>Male</option>
                           <option>Female</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="field">
                  <div class="control">
                     <label class="checkbox">
                     <input type="checkbox">
                     I agree to the <a href="#">terms and conditions</a>
                     </label>
                  </div>
               </div>
               <div class="field is-grouped">
                  <div class="control">
                     <button class="button is-link">Submit</button>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>
</dfn>