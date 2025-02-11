<?if($spawngroups == ''):?>
    <table class="edit_form">
      <tr>
        <td class="edit_form_header">No spawngroup assigned</td>
      </tr>
      <tr>
        <td class="edit_form_content">
          To create a spawngroup for this NPC:<br>
          <ul style="padding-left: 25px;">
            <li>Make sure the desired zone is selected from the search bar</li>
            <li><a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&action=54">Click here to create a new spawngroup</a></li>
            <li><a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&action=16">Click here to add this NPC an existing spawngroup</a></li>
            <li><a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&action=80">Click here to import spawnpoints from Magelo</a></li>
          </ul>
        </td>
      </tr>
    </table>
<?endif;?>
<?if($spawngroups != ''):?>
    <table class="edit_form">
      <tr>
        <td class="edit_form_header">Spawngroup options</td>
      </tr>
      <tr>
        <td class="edit_form_content">
          <ul style="padding-left: 25px;">
            <li><a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&action=54">Click here to create a new spawngroup</a></li>
            <li><a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&action=16">Click here to add this NPC to an existing spawngroup</a></li>
            <li><a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&action=80">Click here to import spawnpoints from Magelo</a></li>
          </ul>
        </td>
      </tr>
    </table><br>
<?foreach($spawngroups as $sg): extract($sg);?>
    <div style="border: 1px solid black; margin-bottom: 15px;">
      <div class="table_header">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td>
              Spawngroup: <?=$name?> - "<a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$spawngroupID?></a>"
            </td>
            <td>
              spawn_limit: <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$spawn_limit?></a>
            </td>
            <td>
              <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=10">View Spawnpoints (<?=$count?>) for this Spawngroup</a>
            </td>
            <td align="right">
              <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=8"><img src="images/add.gif" border="0" title="Add an NPC to this Spawngroup"></a>&nbsp;
              <a onClick="return confirm('Really delete this spawngroup?\n  THIS WILL DELETE ALL OF THIS SPAWNGROUP\'S SPAWNPOINTS, AS WELL!');" href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=6"><img src="images/remove2.gif" border="0" title="Delete this Spawngroup"></a>
            </td>
          </tr>
        </table>
      </div>
      <div class="table_header">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="20%">
              min_x: <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$min_x?></a>
            </td>
            <td width="20%">
              max_x: <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$max_x?></a>
            </td>
            <td width="20%">
              min_y: <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$min_y?></a>
            </td>
            <td width="20%">
              max_y: <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$max_y?></a>
            </td>
            <td width="20%">
              dist: <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$dist?></a>
            </td>
          </tr>
        </table>
      </div>
      <div class="table_header">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="25%">
              mindelay: <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$mindelay?></a>
            </td>
            <td width="25%">
              delay: <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$delay?></a>
            </td>
            <td width="25%">
              despawn: <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$despawntype[$despawn]?></a>
            </td>
            <td width="25%">
              despawn timer: <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$despawn_timer?></a>
            </td>
          </tr>
        </table>
      </div>
      <div class="table_header">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="25%">
              wp_spawns: <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$wp_spawns?></a>
            </td>
            <td width="25%">&nbsp;</td>
            <td width="25%">&nbsp;</td>
            <td width="25%">&nbsp;</td>
          </tr>
        </table>
      </div>
<?if($npcs != ''):?>
      <div class="table_content2" style="padding: 0px;">
        <table width="100%" cellspacing="0">
          <tr bgcolor="#AAAAAA">
            <th width="40%">NPC</th>
            <th width="30%" align="center">Chance</th>
            <th width="15%" align="center">Content Flags</th>
            <th width="15%" align="center">&nbsp;</th>
          </tr>
<?
  $x=0;
  $chance_total = 0;
  foreach($npcs as $npc): extract($npc);
    $chance_total += $chance;
?>
          <tr bgcolor="#<? echo ($x % 2 == 1) ? "AAAAAA" : "BBBBBB";?>">
            <td>
              <a href="index.php?editor=npc&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>"><?=$name?></a> (<?=$npcID?>)
            </td>
            <td align="center"><?=$chance?></td>
            <td align="center"><?echo ($min_expansion > -1 || $max_expansion > -1 || $content_flags != "" || $content_flags_disabled != "") ? "Yes" : "No";?></td>
            <td align="right">
              <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&sid=<?=$spawngroupID?>&sgnpcid=<?=$npcID?>&action=1"><img src="images/edit2.gif" title="Edit this Spawngroup Member" border="0"></a>&nbsp;
              <a onClick="return confirm('Really delete this NPC from the spawngroup?');" href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&sid=<?=$spawngroupID?>&sgnpcid=<?=$npcID?>&action=71"><img src="images/table.gif" title="Remove this Spawngroup Member and Balance Group" border="0"></a>
              <a onClick="return confirm('Really delete this NPC from the spawngroup?');" href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&sid=<?=$spawngroupID?>&sgnpcid=<?=$npcID?>&action=7"><img src="images/remove.gif" title="Remove this Spawngroup Member" border="0"></a>
            </td>
          </tr>
<?
    $x++;
  endforeach;
?>
          <tr bgcolor="#000000">
            <td colspan="4" align="right">
              <a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&sid=<?=$spawngroupID?>&action=3" style="color:yellow;" title="Current: <?=$chance_total?>%">Balance Spawn Rates</a>
            </td>
          </tr>
        </table>
      </div>
<?endif;?>
    </div>
<?endforeach;?>
<?endif;?>
