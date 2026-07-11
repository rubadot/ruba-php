<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum OrganizationStatus: string
{
    case Created = 'created';
    case OnboardingStarted = 'onboarding_started';
    case InitialReview = 'initial_review';
    case OngoingReview = 'ongoing_review';
    case Denied = 'denied';
    case Active = 'active';
}
