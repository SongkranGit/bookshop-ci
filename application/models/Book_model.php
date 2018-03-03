<?php


class Book_Model extends CI_Model
{

    public function getById($id)
    {
        $data = array();
        $this->db->select("*");
        $this->db->from('books');
        $this->db->where('id', $id);
        $this->db->where('is_deleted=', 0);
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
        $this->db->from('books');
        $this->db->where('LOWER(name_en)', strtolower($name));
        $this->db->where('is_deleted=', 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
        }
        $query->free_result();
        return $data;
    }




    public function loadBooksDataTable()
    {
        $data = array();
        $rows = array();
        $this->db->select("b.* , bc.name as category ");
        $this->db->from("books b");
        $this->db->join("book_categories bc" , "bc.id = b.book_category_id");
        $this->db->where("b.is_deleted ", 0);
        $this->db->order_by("order_seq", 'ASC');
        $this->db->order_by("created_date", 'DESC');
        $query = $this->db->get();

        // echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $rows[] = array(
                    "id" => $row->id,
                    "book_id" => $row->page_id,
                    "category" => $row->category,
                    "book_name" =>  $row->book_name,
                    "cover_image" =>  $row->cover_image,
                    "page_count" =>  $row->page_count,
                    "download_path_file" =>  $row->download_path_file,
                    "order_seq" => $row->order_seq,
                    "published_date" => Calendar::formatDateToDDMMYYYY($row->published_date),
                    "published" => $row->published,
                    "updated_date" => Calendar::formatDateTimeToDDMMYYYY($row->updated_date)
                );
            }
        }

        $data['data'] = $rows;
        $query->free_result();
        return $data;
    }


    public function save($data)
    {
        $this->db->insert('books', $data);
        if ($this->db->insert_id() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('books', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function delete($id)
    {
        $data = array('is_deleted' => 1);
        $this->db->where('id', $id);
        $this->db->update('books', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}