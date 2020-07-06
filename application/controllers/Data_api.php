<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_api extends CI_Controller
{
    public function index()
    {
        $listMovies = $this->db->get('list_movies')->result_array();
        echo json_encode($listMovies);
    }

    public function getMoviesId($id)
    {
        $listMovies = $this->db->get_where('list_movies', ['id' => $id])->row_array();
        echo json_encode($listMovies);
    }

    public function deleteMovies($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('list_movies');
    }

    public function getMenu()
    {
        echo json_encode($this->db->get('user_menu')->result_array());
    }
    public function updateMenu($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('user_menu', ['menu' => $this->input->post('menu')]);

        if ($query) {
            $hasil = ['status' => 'Update menu success'];
            echo json_encode($hasil);
        } else {
            $hasil = ['status' => 'Update menu Failed'];
            echo json_encode($hasil);
        }
    }
}
