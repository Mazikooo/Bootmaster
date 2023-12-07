<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-_x9mM9Xx3Sn6_8q-ZwNcabQc', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
    }

    public function index()
    {
    	$this->load->view('Payment/checkout_snap');
    }

   
/*
    public function pro()
    {
		// Required
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => 20000, // no decimal allowed for creditcard
		);

		// Optional
		$item_details = array(
		  'id' => 'a1',
		  'price' => 20000,
		  'quantity' => 1,
		  'name' => "Pro Subscriptions"
		);

	

		// Optional
		$item_details = array ($item_details);


		// Optional
		$customer_details = array(
		  'first_name'    => "Andri",
		  'last_name'     => "Litani",
		  'email'         => "andri@litani.com",
		  'phone'         => "081122334455"
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 2
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }
    */
   

    public function pro()
    {
        $this->load->library('session');
        // Periksa apakah pengguna telah login dan sesi telah terdaftar
        if ($this->session->userdata('status') == 'login') {
            // Ambil data dari sesi
            $id = $this->session->userdata('id');
            $username = $this->session->userdata('member'); // Sesuaikan dengan data sesi yang disimpan saat login
    
            // Load model untuk mengakses tabel "member"
            $this->load->model('Madmin');
            $member_data = $this->Madmin->get_member_data($id);
    
            // Periksa apakah data member berhasil diambil dari database
            if ($member_data) {
                // Data yang berhasil diambil
                $email = $member_data['email'];
                // Dan lain-lain (jika ada data lain yang ingin ditampilkan)
    
                // Required
                $transaction_details = array(
                    'order_id' => rand(),
                    'gross_amount' => 20000, // no decimal allowed for creditcard
                );
    
                // Optional
                $item_details = array(
                    'id' => 'a1',
                    'price' => 20000,
                    'quantity' => 1,
                    'name' => "Pro Subscriptions"
                );
    
                // Optional
                $item_details = array($item_details);
    
                // Optional
                $customer_details = array(
                    'member' => $username,
                    'email' => $email,
                );
    
                // Data yang akan dikirim untuk request redirect_url.
                $credit_card['secure'] = true;
                //ser save_card true to enable oneclick or 2click
                //$credit_card['save_card'] = true;
    
                $time = time();
                $custom_expiry = array(
                    'start_time' => date("Y-m-d H:i:s O", $time),
                    'unit' => 'minute',
                    'duration' => 2
                );
    
                $transaction_data = array(
                    'transaction_details' => $transaction_details,
                    'item_details' => $item_details,
                    'customer_details' => $customer_details,
                    'credit_card' => $credit_card,
                    'expiry' => $custom_expiry
                );
    
                error_log(json_encode($transaction_data));
                $snapToken = $this->midtrans->getSnapToken($transaction_data);
                error_log($snapToken);
                echo $snapToken;
            } else {
                // Jika data member tidak ditemukan di database, berikan respon dengan pesan error
                echo "Data member tidak ditemukan. Silakan coba lagi atau hubungi merchant terkait.";
    
                // Debugging: Output the member_data for inspection
                error_log(json_encode($member_data));
            }
        } else {
            // Jika pengguna belum login, beri respon dengan pesan error
            echo "Anda harus login terlebih dahulu untuk melakukan pembelian.";
        }
    }
    


    
    public function master()
    {
        $this->load->library('session');
        // Periksa apakah pengguna telah login dan sesi telah terdaftar
        if ($this->session->userdata('status') == 'login') {
            // Ambil data dari sesi
            $id = $this->session->userdata('id');
            $username = $this->session->userdata('member'); // Sesuaikan dengan data sesi yang disimpan saat login
    
            // Load model untuk mengakses tabel "member"
            $this->load->model('Madmin');
            $member_data = $this->Madmin->get_member_data($id);
    
            // Periksa apakah data member berhasil diambil dari database
            if ($member_data) {
                // Data yang berhasil diambil
                $email = $member_data['email'];
                // Dan lain-lain (jika ada data lain yang ingin ditampilkan)
    
                // Required
                $transaction_details = array(
                    'order_id' => rand(),
                    'gross_amount' => 45000, // no decimal allowed for creditcard
                );
    
                // Optional
                $item_details = array(
                    'id' => 'a1',
                    'price' => 45000,
                    'quantity' => 1,
                    'name' => "Master Subscriptions"
                );
    
                // Optional
                $item_details = array($item_details);
    
                // Optional
                $customer_details = array(
                    'member' => $username,
                    'email' => $email,
                );
    
                // Data yang akan dikirim untuk request redirect_url.
                $credit_card['secure'] = true;
                //ser save_card true to enable oneclick or 2click
                //$credit_card['save_card'] = true;
    
                $time = time();
                $custom_expiry = array(
                    'start_time' => date("Y-m-d H:i:s O", $time),
                    'unit' => 'minute',
                    'duration' => 2
                );
    
                $transaction_data = array(
                    'transaction_details' => $transaction_details,
                    'item_details' => $item_details,
                    'customer_details' => $customer_details,
                    'credit_card' => $credit_card,
                    'expiry' => $custom_expiry
                );
    
                error_log(json_encode($transaction_data));
                $snapToken = $this->midtrans->getSnapToken($transaction_data);
                error_log($snapToken);
                echo $snapToken;
            } else {
                // Jika data member tidak ditemukan di database, berikan respon dengan pesan error
                echo "Data member tidak ditemukan. Silakan coba lagi atau hubungi merchant terkait.";
    
                // Debugging: Output the member_data for inspection
                error_log(json_encode($member_data));
            }
        } else {
            // Jika pengguna belum login, beri respon dengan pesan error
            echo "Anda harus login terlebih dahulu untuk melakukan pembelian.";
        }
    }
    
    


    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'));
    	echo 'RESULT <br><pre>';
    	var_dump($result);
    	echo '</pre>' ;

    }
}
