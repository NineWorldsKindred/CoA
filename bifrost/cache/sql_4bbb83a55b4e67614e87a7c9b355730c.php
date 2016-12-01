<?php exit; ?>
1356661816
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (mJ01niR_moderator_cache m) LEFT JOIN mJ01niR_users u ON (m.user_id = u.user_id) LEFT JOIN mJ01niR_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}