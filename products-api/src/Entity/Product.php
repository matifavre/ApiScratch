<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Prduct
 * @ORM\Entity
*/

#[ApiResource]

class Product
{
    /**
     * The id of the product
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * The MPN (manufacturer part number)of the product
     *
     * @ORM\Column
     */
    private ?string $mpn = null;
    /**
     * The name of the product
     *
     * @ORM\Column
     */
    private ?string $name = '';
    /**
     * The id of the product
     *
     * @ORM\Column
     */

    /**
     * The description of the product
     *
     * @ORM\Column(type="text")
     */
    private ?string $description ='';

    /**
     * The date issue of the product
     *
     * @ORM\Column(type="datetime")
     */
    private ?\DateTimeInterface $issueDate = null;
    /**
     * The manufactorer of the product
     *
     * @ORM\ManyToOne(targetEntity="Manufacturer", inversedBy="products)
     */
    private ?Manufacturer $manufacturer = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getMpn(): ?string
    {
        return $this->mpn;
    }

    /**
     * @param string|null $mpn
     */
    public function setMpn(?string $mpn): void
    {
        $this->mpn = $mpn;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getIssueDate(): ?\DateTimeInterface
    {
        return $this->issueDate;
    }

    /**
     * @param \DateTimeInterface|null $issueDate
     */
    public function setIssueDate(?\DateTimeInterface $issueDate): void
    {
        $this->issueDate = $issueDate;
    }
    public function getManufacturer(): ?Manufacturer{
        return $this->manufacturer;
    }
    /**
     * @param Manufacturer|null $manufacturer
    */
    public function setManufacturer(?Manufacturer $manufacturer): void
    {
        $this->manufacturer = $manufacturer;
    }
}