<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 27-Mar-18
 * Time: 10:43
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<form>
    Select a user to be displayed in the frontend:
	<select>
		<?php
		foreach ($this->users as $user) {
			echo '<option value="' . $user->id . '">' . $user->username . '</option>';
		}
		?>
	</select>
    <button type="submit">Save</button>
</form>