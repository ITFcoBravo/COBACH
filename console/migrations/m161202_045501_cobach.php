<?php

use yii\db\Migration;

class m161202_045501_cobach extends Migration
{
    public function safeUp() {
        $tableOptions = null;
        
        if ($this->db->driverName == 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
      
        $this->createTable('{{%Reportes}}', [
            'reporte_id' => $this->primaryKey()->unsigned(),
            'personal_id' =>$this->integer(),
            'inmueble_id' =>$this->integer(),
            
            'nombre_reporte' => $this->string(200)->unique(),
            'descripcion' => $this->string(200)->unique(),
            'fecha' => $this->date()->notNull(),
            'Activo' => $this->boolean()
                ], $tableOptions);
        
        //proyectos
        $this->createTable('{{%Personales}}', [
            'personal_id' => $this->primaryKey()->unsigned(),
            
            'nombre' =>$this->string(250)->notNull(),
            'referencia_resguardo' =>$this->string(250)->notNull(),
            'grado' => "ENUM('Licenciado', 'Ingeniero', 'Docente')",
            'telefono' =>$this->string(250),
            'email' => $this->string()->notNull()->unique(),
            'direccion' =>$this->string(250),
            'Activo' => $this->boolean()
        ], $tableOptions);
        
        //bitacora
        $this->createTable('{{%Inmuebles}}', [
            'inmueble_id' => $this->primaryKey()->unsigned(),
            'ubicacion_id' =>$this->integer(),
            
            'nombre' =>$this->string(250)->notNull(),
            'Activo' => $this->boolean(),
            'descripcion' =>$this->string(250)->notNull(),
            'numero_control' =>$this->string(250)->notNull(),
            'marca' =>$this->string(250)->notNull(),
            'numero_serie' =>$this->string(250)->notNull(),
            'modelo' =>$this->string(250)->notNull(),
            'cantidad_inventario' =>$this->integer()->notNull(),
            'costo'=> $this->float(),
            'digito' =>$this->string(250)->notNull(),
            'fecha_adquisicion' => $this->date(),
            'digito' =>$this->string(250)->notNull(),
            'fotografia_uno' =>$this->string(250)->notNull(),
            'fotografia_dos' =>$this->string(250),
            'fotografia_detalle' =>$this->string(250)
                ], $tableOptions);
        
        ///actividades
        $this->createTable('{{%Ubicaciones}}', [
            'ubicacion_id' => $this->primaryKey()->unsigned(),
            
            'nombre_ubicacion' =>$this->string(250)->notNull(),
            'plantel' =>$this->string(250),
            'Activo' => $this->boolean()
        ], $tableOptions);
        
        
        
        $this->addForeignKey('FK_reportes_personales', 'Reportes', 'personal_id', 'Personales', 'personal_id');
        $this->addForeignKey('FK_reportes_inmuebles', 'Reportes', 'inmueble_id', 'Inmuebles', 'inmueble_id');
        $this->addForeignKey('FK_inmuebles_ubicaciones', 'Inmuebles', 'ubicacion_id', 'Ubicaciones', 'ubicacion_id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('FK_reportes_personales', 'Reportes');
        $this->dropForeignKey('FK_reportes_inmuebles', 'Reportes');
        $this->dropForeignKey('FK_inmuebles_ubicaciones', 'Inmuebles');
        
        $this->dropTable('{{%Reportes}}');
        $this->dropTable('{{%Inmuebles}}');
        $this->dropTable('{{%Personales}}');
        $this->dropTable('{{%Ubicaciones}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
     * 
     * ------------------->NEW<-----------------
    */

}