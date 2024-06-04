import React from "react";

type Props = {
  children: string;
  className?: string;
};

const Label = (props: Props) => {
  return (
    <label className={`text-lg ${props.className}`}>{props.children}</label>
  );
};

export default Label;
