<!-- Form for registering an account -->

<script src="/js/confirmRegistration.js"></script>

<form id="register" action="register.php" method="post">
    <fieldset>
        <div class="control-group">
            <input autofocus name="email" placeholder="Email/User ID" id="email" 
                   type="text" title="Must be a valid Harvard email address." />
        </div>
        
        <div class="control-group">
            <input name="password" placeholder="Password" id = "password" type="password"
                   title="Password must contain at least 6 alphanumeric characters"/>
            <span class="error"> </span>
        </div>
        
        <div class="control-group">
            <input name="confirmation" placeholder="Re-enter Password" id="confirmation" type="password"
                   title="Passwords must match"/>
            <span class="error"> </span>
        </div>
        
        <div class="control-group">
            <button type="submit" class="btn">Submit</button>
        </div>
    </fieldset>
</form>

<div>
    or <a href="login.php">Log In</a> 
</div>
