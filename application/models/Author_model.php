<?php

/**
 * Created by PhpStorm.
 * User: BERM-PC
 * Date: 21/12/2558
 * Time: 7:14
 */
class Author_model extends CI_Model
{

    public function getById($id)
    {
        $data = array();
        $this->db->select("*");
        $this->db->from('authors');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
        }
        $query->free_result();
        return $data;
    }

    public function getByName($name)
    {
        $data = array();
        $this->db->select("*");
        $this->db->from('authors');
        $this->db->where('LOWER(name)', $name);
        $this->db->where('is_deleted=', 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
        }
        $query->free_result();
        return $data;
    }

    public function getAll()
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('authors');
        $this->db->where('is_deleted=', 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    public function loadAuthorDataTable()
    {
        $data = array();
        $rows = array();
        $this->db->select("*");
        $this->db->from("authors");
        $this->db->order_by("created_date", 'ASC');
        $query = $this->db->get();

        // echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $rows[] = array(
                    "id"=> $row->id,
                    "first_name" => $row->first_name,
                    "last_name" => $row->last_name,
                    "email" => $row->email,
                    "created_date" => Calendar::formatDateTimeToDDMMYYYY($row->created_date)
                );
            }
        }

        $data['data'] = $rows;
        $query->free_result();
        return $data;
    }



    public function save($data)
    {
        $this->db->insert('authors', $data);
        if ($this->db->insert_id() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('authors', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('authors');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }




}