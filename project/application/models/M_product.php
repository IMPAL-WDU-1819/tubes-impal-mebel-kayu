<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model {
	public function add_product($name, $description, $category, $price, $stock, $image, $slug) { // 1301164222
		$data = array(
			"name" => $name,
			"description" => $description,
			"category" => $category,
			"price" => $price,
			"stock" => $stock,
			"image" => $image,
			"slug" => $slug
		);
		$this->db->insert("product", $data);
	}
	public function get_product() { // 1301164222
		$this->db->order_by("date", "desc");
		return $this->db->get("product");
	}
	public function get_product_by_id($id) { // 1301164222
		$this->db->where("id", $id);
		return $this->db->get("product")->result_array()[0];
	}
	public function get_product_by_slug($slug) { // 1301164222
		$this->db->where("slug", $slug);
		return $this->db->get("product")->result_array()[0];
	}
	public function get_product_by_category($category) { // 1301164222
		$this->db->where("category", $category);
		return $this->db->get("product");
	}
	public function get_product_by_search($search) { // 1301164222
		$this->db->like("name", $search);
		return $this->db->get("product");
	}
	public function delete_product($id) { // 1301164222
		$this->db->where("id", $id);
		$this->db->delete("product");
	}
	public function edit_product($id, $name, $description, $category, $price, $stock, $image, $slug) { // 1301164222
		$data = array(
			"name" => $name,
			"description" => $description,
			"category" => $category,
			"price" => $price,
			"stock" => $stock,
			"image" => $image,
			"slug" => $slug
		);
		$this->db->where("id", $id);
		$this->db->update("product", $data);
	}
	public function add_to_cart($quantity, $id, $username, $totalpriceperitem) { // 1301164222
		$data = array(
			"quantity" => $quantity,
			"id" => $id,
			"username" => $username,
			"totalpriceperitem" => $totalpriceperitem
		);
		$this->db->insert("item", $data);
	}
	public function get_cart($username) { // 1301164222
		return $this->db->query("SELECT * FROM item JOIN product ON item.id = product.id WHERE username = '$username' AND selling_id IS NULL");
	}
	public function delete_item_in_cart($item_id) { // 1301164222
		$this->db->where("item_id", $item_id);
		$this->db->delete("item");
	}
	public function check_cart_item($username, $item_id) { // 1301164222
		$this->db->where("username", $username);
		$this->db->where("item_id", $item_id);
		return $this->db->get("item");
	}
	public function add_selling($username, $totalprice) { // 1301164222
		$data = array(
			"username" => $username,
			"totalprice" => $totalprice
		);
		$this->db->insert("selling", $data);
	}
	public function get_selling_id($username, $totalprice) { // 1301164222
		$this->db->where("username", $username);
		$this->db->where("totalprice", $totalprice);
		return $this->db->get("selling", $data)->result_array()[0];
	}
	public function edit_item_selling_id($selling_id, $username) { // 1301164222
		$data = array(
			"selling_id" => $selling_id,
		);
		$this->db->where("username", $username);
		$this->db->where("selling_id", NULL);
		$this->db->update("item", $data);
	}
	public function decrement_stock($id, $quantity) { // 1301164222
		$this->db->where("id", $id);
		$this->db->set('stock', 'stock-'.$quantity, FALSE);
		$this->db->update("product");
	}
	public function increment_stock($id, $quantity) { // 1301164222
		$this->db->where("id", $id);
		$this->db->set('stock', 'stock+'.$quantity, FALSE);
		$this->db->update("product");
	}
	public function add_review($id, $review, $username, $star) { // 1301164222
		$data = array(
			"id" => $id,
			"review" => $review,
			"username" => $username,
			"star" => $star
		);
		$this->db->insert("review", $data);
	}
	public function get_review($id) { // 1301164222
		$this->db->where("id", $id);
		return $this->db->get("review");
	}
}