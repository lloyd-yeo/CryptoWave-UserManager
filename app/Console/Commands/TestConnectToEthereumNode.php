<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use LetsAgree\GethJsonRpcPhpClient\JsonRpc\GuzzleClientFactory;
use LetsAgree\GethJsonRpcPhpClient\JsonRpc\GuzzleClient;
use LetsAgree\GethJsonRpcPhpClient\JsonRpc\Client;
use Carbon\Carbon;

class TestConnectToEthereumNode extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'eth:test';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Test connecting to Ethereum Node';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		// Create HTTP client instance (you can use something simplier just wrap it by using IHttpClient interface)
		// Create JsonRpc client which can run any operation on your geth node
		#$httpClient = new GuzzleClient(new GuzzleClientFactory(), 'localhost', 8545);
		#$client = new Client($httpClient);

		// Run operation (all are described here: https://github.com/ethereum/wiki/wiki/JSON-RPC#json-rpc-methods)
		#$result = $client->callMethod('eth_getBalance', ['0xf99ce9c17d0b4f5dfcf663b16c95b96fd47fc8ba', 'latest']);
		#$result = $client->callMethod('personal_newAccount', ["password"]);
		#dump($result);
		// $result ==='0x16345785d8a0000'

		#$sock = socket_create(AF_UNIX, SOCK_STREAM, 0);
		#socket_connect($sock, "/root/.ethereum/geth.ipc", 1);
		#$myBuf = NULL;
		#$msg   = "{\"jsonrpc\":\"2.0\",\"method\":\"personal_newAccount\",\"params\":[\"password\"],\"id\":1}";
		#socket_send($sock, $msg, strlen($msg), MSG_EOF);
		#socket_recv($sock, $myBuf, 100, MSG_WAITALL);
		#dump($myBuf);

		$wallet_password = "l-ywz@hotmail.com" . "ABCDEFG" . Carbon::now()->toDayDateTimeString();

		$file = tmpfile();
		fwrite($file, $wallet_password);
		$path = stream_get_meta_data($file)['uri'];
		$account_id = shell_exec("geth --password " . $path . " account new");

		preg_match_all('/{(.*?)}/', $account_id, $matches);

		dump($matches[1]);
	}
}
