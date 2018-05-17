<p>Your configured workers:</p>

<table class="table">
	<tr>
		<th>Worker Name</th>
		<th>Worker Password</th>
		<th>Generate Batch File</th>
	</tr>
{section worker $WORKERS}
	<tr>
		<td>{$WORKERS[worker].username}</td>
		<td>{$WORKERS[worker].password}</td>
		<td><a href="#">Generate</a></td>
	</tr>

{/section}
</table>