<?php
declare(strict_types=1);

use Symfony\Contracts\Service\Attribute\Required;
use Symfony\Contracts\Translation\TranslatorInterface;

trait TranslatorAwareTrait
{
    protected TranslatorInterface|null $translator = null;

    #[Required]
    public function withTranslator(TranslatorInterface $translator): void
    {
        $this->translator = $translator;
    }
}