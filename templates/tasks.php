<!-- Main page that user accesses. Contains information about all tasks available-->

<script src="js/paging.js"> </script>
<table id="tasktable" class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>Task Name</th>      
            <th>Short Description</th>   
            <th>Approx Time</th>
            <th>Hello</th>    
         </tr>
    </thead>
    <tbody>
    <?php foreach ($rows as $row): ?>
        <tr>
            <td><?= $row["name"] ?></td>      
            <td><?= $row["sdescrip"] ?></td>   
            <td><?= $row["time"] ?></td>
            <td>
                <a class="btn btn-primary" data-loading-text="Loading..." href="#">Go to Task</a>
            </td>   
        </tr>
        <tr>
            <td>Longer Description: <?= $row["ldescrip"] ?></td>
            <td>La</td>
            <td>La</td>
            <td>La</td>
        </tr>
    <? endforeach ?>
    </tbody>
</table>

