<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h2> Update API </h2>
            <form action="<?php echo URL; ?>/update/updateapi" method="POST" class="register"  id="update">
                <fieldset class="row1">
        <legend>Api Details</legend>
        <p>
            <!-- ROUTE -->
            <label>API Route * </label>
            <input type="text" name="api" required="required" readonly value="<?php echo $route_name; ?>"/>

            <!-- METHOD -->
            <label>Method *</label>
            <input type="text" name="api" required="required" readonly value="<?php echo $method_name; ?>"/>

            <!-- DESCRIPTION -->
            <label>Description</label>
            <textarea class="textarea" name="description"><?php echo $method_description; ?></textarea>

            <!-- TAG -->
            <label>Tag *</label>
            <input type="text" name="tags" required="required" value="<?php echo $method_tags; ?>"/>

        </p>

        <div class="clear"></div>
    </fieldset>

                <!-- PARAMETERS -->
                <fieldset class="row1">
                    <legend>Parameters</legend>

                    <p style="margin-bottom:20px;">
                        <input type="button" value="Add Parameter" onClick="addRow('dataTable')" />
                    </p>

                    <div class="clear"></div>

                    <table id="dataTable" class="form" border="1" width="100%">
                        <tbody>

                            <?php foreach($parameters as $param){ ?>
                                <tr>
                                    <td>
                                        <label>Name</label>
                                        <input type="text" name="BX_NAME[]" value="<?php echo $param->name; ?>" />
                                    </td>

                                    <td>
                                        <label for="BX_TYPE">Type</label>
                                        <select type="text" class="small"  name="BX_TYPE[]">
                                            <option <?php if($param->type == "string"){echo "selected"; } ?>>string</option>
                                            <option <?php if($param->type == "file"){echo "selected"; } ?>>file</option>
                                        </select>
                                    </td>

                                    <td>
                                        <label>Required</label>
                                        <input type="checkbox" name="BX_CHK[]" <?php if($param->required==true) echo "checked"; ?> />
                                    </td>

                                    <td>
                                        <label>Description</label>
                                        <textarea name="BX_DESCRIPTION[]"> <?php echo $param->description; ?> </textarea>
                                    </td>

                                    <td>
                                        <label for="BX_IN">In</label>
                                        <select type="text" class="small"  name="BX_IN[]">
                                            <option <?php if($param->in == "query"){echo "selected"; } ?>>query</option>
                                            <option <?php if($param->in == "path"){echo "selected"; } ?>>path</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="button" class="btnDelete" value="Remove" onClick="deleteRow('dataTable')">
                                    </td>
                                </tr>
                            <?php } ?>

                            <!--EMPTY ROWS==0, THEN NEW ROW CANT BE CREATED SO INSERT A NEW ONE -->
                            <?php if($parameter_count== 0) {
                                $row = <<<ROW
                                    <tr>
                                        <td>
                                            <label>Name</label>
                                            <input type="text" name="BX_NAME[]" />
                                        </td>
            
                                        <td>
                                            <label for="BX_TYPE">Type</label>
                                            <select type="text" class="small"  name="BX_TYPE[]">
                                                <option>string</option>
                                                <option>file</option>
                                            </select>
                                        </td>
            
                                        <td>
                                            <label>Required</label>
                                            <input type="checkbox" name="BX_CHK[]" />
                                        </td>
            
                                        <td>
                                            <label>Description</label>
                                            <textarea name="BX_DESCRIPTION[]"></textarea>
                                        </td>
            
                                        <td>
                                            <label for="BX_IN">In</label>
                                            <select type="text" class="small"  name="BX_IN[]">
                                                <option>query</option>
                                                <option>path</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="button" class="btnDelete" value="Remove" onClick="deleteRow('dataTable')">
                                        </td>
                                    </tr>
ROW;
                                echo $row;
                            }//endif
                            ?>

                        </tbody>
                    </table>
                    <div class="clear"></div>
                </fieldset>

                <!--SUBMIT BUTTONS-->
                <input type="hidden" name="method_id" required="required" value="<?php echo $method_id; ?>">
                <input class="btn btn-success" type="submit" value="update" name="update"/>
                <a href="<?php echo URL; ?>/update/deleteapi/<?php echo $method_id; ?>" class="btn btn-danger">Delete</a>
            </form>

        </div>
    </div>
</div>