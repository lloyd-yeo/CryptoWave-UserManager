<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Zip;
use Auth;
use File;
use ZipArchive;

class MinerClientController extends Controller
{

	public function downloadMacMiner(Request $request) {

		$mac_miner_file = str_replace('storage/', '', storage_path("public/CryptoWave-Mac.zip"));

		return response()->download($mac_miner_file);
	}

	public function download(Request $request)
	{
		// create a list of files that should be added to the archive.
		$config_txt_path = str_replace('storage/', '', storage_path("public/CryptoWaveMiner/config.txt"));
		$path            = str_replace('storage/', '', storage_path("public/CryptoWaveMiner/*"));
		File::put($config_txt_path, $this->craftConfigContent());
		$files = glob($path);

		$archiveFile = str_replace('storage/', '', storage_path("public/CryptoWaveMiner.zip"));

		$archive     = new ZipArchive();
		if ($archive->open($archiveFile, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
			foreach ($files as $file) {
				if ($archive->addFile($file, basename($file))) {
					// do something here if addFile succeeded, otherwise this statement is unnecessary and can be ignored.
					continue;
				} else {
					throw new \Exception("file `{$file}` could not be added to the zip file: " . $archive->getStatusString());
				}
			}

			if ($archive->close()) {
				// archive is now downloadable ...
				return response()->download($archiveFile, basename($archiveFile))->deleteFileAfterSend(TRUE);
			} else {
				throw new Exception("could not close zip file: " . $archive->getStatusString());
			}
		}
	}

	public function craftConfigContent()
	{
		return '"pool_list" :
				[
					{"pool_address" : "http://frankfurt-1.xmrpool.net:3333", 
					"wallet_address" : "48WCGXaoL7gUY8fwSxUPgR4VYx4iVTJYEF4jP7Uq4jG26Hz9Gc6QjgU1m7Hht5pBPJbccCyR4khkZD88wSwErkRt2FkmpNH", 
					"pool_password" : "' . Auth::user()->email . '", 
					"use_nicehash" : true, 
					"use_tls" : false, 
					"tls_fingerprint" : "", 
					"pool_weight" : 1 },
				],
				"currency" : "monero",
				"call_timeout" : 10,
				"retry_time" : 30,
				"giveup_limit" : 0,
				"verbose_level" : 4,
				"print_motd" : false,
				"h_print_time" : 60,
				"aes_override" : null,
				"use_slow_memory" : "warn",
				"tls_secure_algo" : true,
				"daemon_mode" : false,
				"flush_stdout" : false,
				"output_file" : "",
				"httpd_port" : 0,
				"http_login" : "",
				"http_pass" : "",
				"prefer_ipv4" : true,';
	}
}
