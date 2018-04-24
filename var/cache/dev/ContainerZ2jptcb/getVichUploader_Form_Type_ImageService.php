<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'vich_uploader.form.type.image' shared service.

return $this->services['vich_uploader.form.type.image'] = new \Vich\UploaderBundle\Form\Type\VichImageType(${($_ = isset($this->services['vich_uploader.storage']) ? $this->services['vich_uploader.storage'] : $this->getVichUploader_StorageService()) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.upload_handler']) ? $this->services['vich_uploader.upload_handler'] : $this->load(__DIR__.'/getVichUploader_UploadHandlerService.php')) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.property_mapping_factory']) ? $this->services['vich_uploader.property_mapping_factory'] : $this->getVichUploader_PropertyMappingFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->load(__DIR__.'/getPropertyAccessorService.php')) && false ?: '_'}, NULL);
