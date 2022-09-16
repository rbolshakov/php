<?php

class Task
{
  private string $desc;
  private DateTime $dateCreated;
  private DateTime $dateUpdated;
  private DateTime $dateDone;
  private int $priority;
  private bool $isDone = false;
  private User $user;
  private array $comments = [];

  public function __construct(User $user, string $desc, int $priority = 1)
  {
    $this->user = $user;
    $this->desc = $desc;
    $this->priority = $priority;
    $this->setDateCreated(new DateTime());
  }

  public function markAsDone(): void
  {
    $this->setDateUpdated(new DateTime);
    $this->setDateDone(new DateTime);
    $this->setIsDone();
  }

  public function getDesc(): string
  {
    return $this->desc;
  }

  public function getDateCreated(): DateTime
  {
    return $this->dateCreated;
  }

  public function getDateUpdated(): DateTime
  {
    return $this->dateUpdated;
  }

  public function getDateDone(): DateTime
  {
    return $this->dateDone;
  }

  public function getPriority(): int
  {
    return $this->priority;
  }

  public function isDone(): bool
  {
    return $this->isDone;
  }

  public function getUser(): User
  {
    return $this->user;
  }

  public function getComments(): array
  {
    return $this->comments;
  }

  public function setDesc(string $desc): void
  {
    $this->setDateUpdated(new DateTime);
    $this->desc = $desc;
  }

  public function setDateCreated(DateTime $dateCreated): void
  {
    $this->dateCreated = $dateCreated;
  }

  public function setDateUpdated(DateTime $dateUpdated): void
  {
    $this->dateUpdated = $dateUpdated;
  }

  public function setDateDone(DateTime $dateDone): void
  {
    $this->dateDone = $dateDone;
  }

  public function setPriority(int $priority): void
  {
    $this->priority = $priority;
  }

  private function setIsDone(): void
  {
    $this->isDone = true;
  }

  public function setUser(User $user): void
  {
    $this->user = $user;
  }

  public function setComment(Comment $comment): void
  {
    $this->comments[] = $comment;
  }
}
