
  <div class="mini-container">
    <h2>ADD LEAD</h2>
    <form action="<?php echo URL; ?>leads/addlead" method="POST">
        <table>
          <thead>
            <td><label>Name</label></td>
            <td><label>Address</label></td>
            <td><label>Contact No.</label></td>
            <td><label>Status</label></td>
            <td><label>Counsellor ID</label></td>
            <td><label>Next Follow Up</label></td>
          </thead>
          <tbody id='records'>
            <tr>
              <td><input type="text" name="l_name" required /></td>
              <td><input type="text" name="address" required /></td>
              <td><input type="text" name="contact" required /></td>
              <td>
                <select name="status">
                  <option value="active" selected="true">Active</option>
                  <option value="expired">Expired</option>
                  <option value="postponed">Postponed</option>
                  <option value="dismissed">Dismissed</option>
                </select>
              </td>
              <td>
                <select name="c_id">
                  <?php foreach ($c_ids as $c_id) { ?>
                    <option value="<?php echo $c_id->c_id; ?>"><?php echo $c_id->c_id; ?></option>
                  <?php } ?>
                </select>
              </td>
              <td><input type="text" name="next_followup" required /></td>
            </tr>
          </tbody>
        </table>
        <br>
        <input type="submit" name="add_lead" value="Done" />
        <!-- <button type="button" id="addmore">Add More</button> -->
        <a href="<?php echo URL; ?>leads/index"><button type="button" name="back">Back</button></a>
    </form>

  </div>
