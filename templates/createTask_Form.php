<!-- Form to create a tasks -->

<script src="/js/validTask.js"></script>

<form id="createTask" action="createTask.php" method="post">
    <fieldset>
        <div class="control-group">
            <input autofocus name="taskname" placeholder="Name of Task" id="taskname" 
                   type="text" title="Required: Input an informative name for the task."/>
        </div>
        
        <div class="control-group">
            <textarea name="sdescrip" rel="tooltip" id="sdescrip" rows="3" placeholder="Short Description" 
                title="Required: Input a short (one sentence) description of the task."></textarea>
        </div>
        
        <div class="control-group">
             <textarea name="ldescrip" rel="tooltip" id="ldescrip" rows="5" placeholder="Longer Description" 
                title="If you would like, enter a longer description for the task"></textarea>
        </div>
        
        <div class="control-group">
            <input type="checkbox"> Check me out
        </div>
    
        <div class="control-group">
            <input name="time" placeholder="Approx Time to Complete" rel="tooltip" id="time" type="text"
                   title="Input the approximate time it will take a user to complete the task."/>
            <span class="error"> </span>
        </div>
        
        <div class="control-group">
            <button type="submit" class="btn">Submit</button>
        </div>
    </fieldset>
</form>
