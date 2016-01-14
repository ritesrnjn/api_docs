<form action="<?php echo URL; ?>/create/addapi" class="register" method="POST">
    <h1>API Listing</h1>
    <fieldset class="row1">
        <legend>Api Details</legend>
        <p>
            <!-- ROUTE -->
            <label>API Route * </label>
            <input type="text" name="api" required="required"/>

            <!-- METHOD -->
            <label>Method *</label>
            <select name="method" required="required">
                <option value="GET">GET</option>
                <option value="POST">POST</option>
                <option value="PUT">PUT</option>
                <option value="DELETE">DELETE</option>
            </select>

            <!-- DESCRIPTION -->
            <label>Description</label>
            <textarea class="textarea" name="description"></textarea>

            <!-- TAG -->
            <label>Tag *</label>
            <input type="text" name="tags" required="required" />

        </p>

        <div class="clear"></div>
    </fieldset>

    <!-- PARAMETERS -->
    <fieldset class="row1">
        <legend>Parameters Details</legend>
        <p style="margin-bottom:20px;">
            <input type="button" value="Add Parameter" onClick="addRow('dataTable')" />
        </p>


        <table id="dataTable" class="form" border="1" width="100%">
            <tbody>
            <tr>
                <td>
                    <label>Name</label>
                    <input type="text" name="BX_NAME[]">
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
                    <textarea class="textarea" name="BX_DESCRIPTION[]"></textarea>
                </td>

                <td>
                    <label>In</label>
                    <select type="text" class="small"  name="BX_IN[]">
                        <option>FormData</option>
                        <option>Path</option>
                    </select>
                </td>
                <td>
                    <input type="button" class="btnDelete" value="Remove" onClick="deleteRow('dataTable')">
                </td>
            </tr>
            </tbody>
        </table>
        <div class="clear"></div>
        <input class="submit" type="submit" value="Confirm" />
    </fieldset>


    <div class="clear"></div>

</form>