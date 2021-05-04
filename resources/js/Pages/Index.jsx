import React from 'react';
import { Button } from 'antd';
import AppLayout from "../Layout";
import { InertiaLink } from "@inertiajs/inertia-react";

export default function Index() {
  return <AppLayout title="Home page">
    <Button>btn</Button>

    <InertiaLink href={route('sandbox')} method="get">
      <Button>Sandbox</Button>
    </InertiaLink>

  </AppLayout>;
}
