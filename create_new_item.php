
			<h2>Create new record</h2>
			<form action="submit_new_item.php" method="POST">
				<table>
					<tr>
						<td class="align_right">ID:</td>
						<td class="align_left"><input type="text" value="auto" disabled /></td>
					</tr>
					<tr>
						<td class="align_right">Item Name:</td>
						<td class="align_left"><input type="text" name="item_name" /></td>
					</tr>
					<tr>
						<td class="align_right">Category:</td>
						<td class="align_left">
							<select name="category">
								<option value="Cold Drinks">Cold Drinks</option>
								<option value="Hot Drinks">Hot Drinks</option>
								<option value="Refrigerated Food">Refrigerated Food</option>
								<option value="Pre-Packaged Food/Fruits">Pre-Packaged Food/Fruits</option>
								<option value="Counter">Counter</option>
								<option value="Frozen">Frozen</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="align_right">Description:</td>
						<td class="align_left"><input type="text" name="description" /></td>
					</tr>
					<tr>
						<td class="align_right">Price:</td>
						<td class="align_left"><input type="text" name="price" /></td>
					</tr>
					<tr>
						<td class="align_right">Options:</td>
						<td class="align_left"><input type="text" name="options" /></td>
					</tr>
					<tr>
						<td class="align_right">Image:</td>
						<td class="align_left"><input type="file" name="image" accept="image/*" /></td>
					</tr>
					<tr>
						<td class="align_right" colspan="2"><button type="submit">Create</button></td>
					</tr>
				</table>
			</form>
	
