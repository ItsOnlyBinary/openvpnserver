<?PHP
$NETWORK = $_POST['NETWORK'];
$NETMASK = $_POST['NETMASK'];
$SERVER_PORT = $_POST['SERVER_PORT'];
$CANONICAL = $_POST['CANONICAL'];
$PROTOCOL = $_POST['PROTOCOL'];
$CIPHER = $_POST['CIPHER'];
$CLIENT = $_POST['CLIENT'];
$HASH_ALGO = $_POST['HASH_ALGO'];
$GATEWAY = $_POST['GATEWAY'];
$SUBNET = $_POST['SUBNET'];
$LAN_SUBNET = $_POST['LAN_SUBNET'];
$COMPRESS = $_POST['COMPRESS'];
$COMP_LZO = $_POST['COMP_LZO'];
$IPP = $_POST['IPP'];
$DHCP_1 = $_POST['DHCP_1'];
$TELNET_CONSOLE = $_POST['TELNET_CONSOLE'];
$VERB = $_POST['VERB'];

$arguments = "";
$arguments .= "NETWORK_NEW=\"$NETWORK\"\n";
$arguments .= "NETMASK_NEW=\"$NETMASK\"\n";
$arguments .= "SERVER_PORT_NEW=\"$SERVER_PORT\"\n";
$arguments .= "CANONICAL_NEW=\"$CANONICAL\"\n";
$arguments .= "PROTOCOL_NEW=\"$PROTOCOL\"\n";
$arguments .= "CIPHER_NEW=\"$CIPHER\"\n";
$arguments .= "CLIENT_NEW=\"$CLIENT\"\n";
$arguments .= "HASH_ALGO_NEW=\"$HASH_ALGO\"\n";
$arguments .= "GATEWAY_NEW=\"$GATEWAY\"\n";
$arguments .= "SUBNET_NEW=\"$SUBNET\"\n";
$arguments .= "LAN_SUBNET_NEW=\"$LAN_SUBNET\"\n";
$arguments .= "COMPRESS_NEW=\"$COMPRESS\"\n";
$arguments .= "COMP_LZO_NEW=\"$COMP_LZO\"\n";
$arguments .= "IPP_NEW=\"$IPP\"\n";
$arguments .= "DHCP_1_NEW=\"$DHCP_1\"\n";
$arguments .= "TELNET_CONSOLE_NEW=\"$TELNET_CONSOLE\"\n";
$arguments .= "VERB_NEW=\"$VERB\"\n";

echo "Please wait while updating configuration...";

$file = "/usr/local/emhttp/plugins/openvpnserver/openvpnserver.args";
file_put_contents($file, $arguments);
shell_exec("/usr/local/emhttp/plugins/openvpnserver/scripts/rc.openvpnserver updatecfg");
shell_exec("/usr/local/emhttp/plugins/openvpnserver/scripts/rc.openvpnserver writeconf");
?>

<HTML>
<HEAD><SCRIPT>var goback=parent.location;</SCRIPT></HEAD>
<BODY onLoad="parent.location=goback;"</BODY>
</HTML>
