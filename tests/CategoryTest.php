<?php

namespace App\Tests;

use App\Entity\Category;

class CategoryTest extends DefaultKernelTestCase
{
    public function testNewCategory()
    {
        $category = new Category();
        $category->setName(sprintf('category %d', rand(1, 500)));

        $this->entityManager->persist($category);
        $this->entityManager->flush();
    }
}
