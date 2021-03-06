		<div class="row collectionStats">
			<div class="col-xs-3">
				<span id="collectionCount"></span>
				<p>Collection</p>
			</div>
			<div class="col-xs-3">
				<span id="completeCount"></span>
				<p>Completed</p>
			</div>
			<div class="col-xs-3">
				<span id="backlogCount"></span>
				<p>Backlog</p>
			</div>
			<div class="col-xs-3">
				<span id="wantCount"></span>
				<p>Want</p>
			</div>
		</div>

		<div class="progress">
			<div id="completionPercentage" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100">
				<span id="completionPercentageLabel"></span>% Complete
			</div>
		</div>

		<div class="row">
			<div class="col-sm-8">
				<?php 
					if($sessionUserID != null && $sessionUserID == $user->UserID) 
					{
						echo "<a class='btn btn-primary btn-fullWidth' href='/search'>Add Games &raquo;</a>";
					}
				?>
				<div id="gameCollection"></div>
				<div id="gameCollectionViewMore"></div>
			</div>
			<div class="col-sm-4">
				<b>Order By</b>
				<ul class="filters">
					<li>
						<label>
							<input name="orderBy" type="radio" value="releaseDateDesc" checked> 
							Release Date (Newest)
						</label>
					</li>
					<li>
						<label>
							<input name="orderBy" type="radio" value="releaseDateAsc"> 
							Release Date (Oldest)
						</label>
					</li>
					<li>
						<label>
							<input name="orderBy" type="radio" value="nameAsc"> 
							Name (A-Z)
						</label>
					</li>
					<li>
						<label>
							<input name="orderBy" type="radio" value="nameDesc"> 
							Name (Z-A)
						</label>
					</li>
					<li>
						<label>
							<input name="orderBy" type="radio" value="hoursPlayedDesc"> 
							Hours Played (Most)
						</label>
					</li>
					<li>
						<label>
							<input name="orderBy" type="radio" value="hoursPlayedAsc"> 
							Hours Played (Least)
						</label>
					</li>
				</ul>

				<b>List</b>
				<ul class="filters">
					<?php
						foreach($lists as $list)
						{
							echo "<li>
									<label>
										<input id='filter_list_" . $list->ListID . "' type='checkbox' checked> " 
										. $list->ListName . " (" . $list->Games . ")" . 
									"</label>
								</li>";
						}
					?>
				</ul>

				<b>Completion</b>
				<ul class="filters">
					<?php
						foreach($statuses as $status)
						{
							echo "<li>
									<label>
										<input id='filter_status_" . $status->StatusID . "' type='checkbox' checked> " 
										. $status->StatusName . " (" . $status->Games . ")" . 
									"</label>
								</li>";
						}
					?>
				</ul>

				<b>Platforms</b>
				<ul class="filters">
					<?php
						foreach($platforms as $platform)
						{
							if($platform->PlatformID == null) $platform->PlatformID = 0;
							if($platform->Abbreviation == null) $platform->Abbreviation = "No Platform";
							echo "<li>
									<label>
										<input id='filter_platform_" . $platform->PlatformID . "' type='checkbox' checked> " 
										. $platform->Abbreviation . " (" . $platform->Games . ")" . 
									"</label>
								</li>";
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>