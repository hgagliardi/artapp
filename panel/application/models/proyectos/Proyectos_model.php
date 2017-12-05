<?php
class Proyectos_model extends CI_Model {

        public function get_proyectos()
        {
                $query = $this->db->get('proyectos');
                return $query->result();
        }
        public function get_proyectos_limit($limit1, $limit2)
        {
                $query = $this->db->get('proyectos', $limit1, $limit2);
                return $query->result();
        }
        public function get_proyecto_por_id($proyectoId)
        {
                  $sql = "SELECT *
                          FROM proyectos
                          WHERE proyectos_id = '$proyectoId'
                          LIMIT 1";

                  $query = $this->db->query($sql);
                  $result = $query->result();
                  return $result;
        }
        public function get_categorias()
        {
                  $query = $this->db->get('categorias');
                  return $query->result();
        }
        public function get_proyectos_categories($proyectoId)
        {
                $sql = "SELECT pc.categoria_id
                        FROM proyectos_categorias pc
                        WHERE pc.proyecto_id = '$proyectoId'";

                $query = $this->db->query($sql);
                $result = $query->result();
                return $result;

        }
        public function get_proyectos_fotoprincipal($proyectoFotoPrincipal)
        {
                $sql = "SELECT * FROM items WHERE items_activo = 1 AND items_id = '$proyectoFotoPrincipal' LIMIT 1";
                $query = $this->db->query($sql);
                $result = $query->result();
                return $result;
        }
        public function get_fotos_por_proyecto($proyectoId)
        {
                $sql = "SELECT *
                        FROM items
                        WHERE items_proyecto = '$proyectoId'";

                $query = $this->db->query($sql);
                $result = $query->result();
                return $result;
        }
        public function insertar_proyecto($nombre, $descripcion, $principal, $subido)
        {
                $this->proyectos_nombre = $nombre;
                $this->proyectos_descripcion = $descripcion;
                $this->proyectos_principal = $principal;
                $this->proyectos_subido = $subido;

                $this->db->insert('proyectos', $this);
        }

        public function update_proyecto($proyectoId, $titulo, $descripcion)
        {
                $this->proyectos_nombre = $titulo;
                $this->proyectos_descripcion = $descripcion;

                $this->db->update('proyectos', $this, array('proyectos_id' => $proyectoId));
        }
        public function borrar_categorias($proyectoId)
        {
                $this->db->delete('proyectos_categorias', array('proyecto_id' => $proyectoId));
        }
        public function agregar_categoria($proyectoId, $categoria)
        {
                $data = array(
                  'proyecto_id' => $proyectoId,
                  'categoria_id' => $categoria
                );

                $this->db->insert('proyectos_categorias', $data);
        }

}
