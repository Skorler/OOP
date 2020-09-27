<?php

declare(strict_types=1);

class Employee
{
    private ?string $lastName;
    private ?string $firstName;
    private ?string $secondName;
    private ?string $jobName;

    private ?int $salary;

    /**
     * Employee constructor.
     * @param string|null $lastName
     * @param string|null $firstName
     * @param string|null $secondName
     * @param string|null $jobName
     */
    public function __construct(?string $lastName, ?string $firstName, ?string $secondName, ?string $jobName)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->secondName = $secondName;
        $this->jobName = $jobName;
    }


    public function setSalaryByHours(?int $hours, ?int $cost) : void
    {
        $this->salary = $hours * $cost;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getSecondName(): ?string
    {
        return $this->secondName;
    }

    /**
     * @param string|null $secondName
     */
    public function setSecondName(?string $secondName): void
    {
        $this->secondName = $secondName;
    }

    /**
     * @return string|null
     */
    public function getJobName(): ?string
    {
        return $this->jobName;
    }

    /**
     * @param string|null $jobName
     */
    public function setJobName(?string $jobName): void
    {
        $this->jobName = $jobName;
    }

    /**
     * @return int|null
     */
    public function getSalary(): ?int
    {
        return $this->salary;
    }

    /**
     * @param int|null $salary
     */
    public function setSalary(?int $salary): void
    {
        $this->salary = $salary;
    }



}