 <?php
 require_once(BASEPATH .'database/DB.php');
$db =DB();
$query = $db->get( 'pagetable' );
$result = $query->result();
foreach( $result as $row )
{
$route[$row->paramlink_or_page_slug]='page';
}
?>
