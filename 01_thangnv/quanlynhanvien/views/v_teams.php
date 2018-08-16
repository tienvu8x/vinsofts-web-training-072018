<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Teams <a href="index.php?controller=c_edit_team&action=add"><i class="fa fa-plus-circle"></i></a></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Logo</th>
                        <th>Leader ID</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($teams as $team  ) {
                ?>
                <tr>
                    <td><?php echo $team->id ?></td>
                    <td><?php echo $team->name ?></td>
                    <td><?php echo $team->description ?></td>
                    <td class="text-center"><img src="<?php echo $team->logo ?>" alt="<?php echo $team->logo ?>" height="30px"></td>
                    <td class="text-right"><?php echo $team->leader_id ?></td>
                    <td class="text-center">
                        <a href="index.php?controller=c_edit_team&action=edit&id=<?php echo $team->id ?>"><i class="fa fa-edit"></i></a>
                        &nbsp;
                        <?php
                            if($team->id !=1) echo '<a href="index.php?controller=c_edit_team&action=delete&id='.$team->id.'"><i class="fa fa-remove"></i></a>';
                        ?>
                        
                    </td>
                </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>